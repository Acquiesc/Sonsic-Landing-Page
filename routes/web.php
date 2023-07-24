<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\NewsletterSignup;

use App\Mail\SignupResponse;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::post('/signup', function(Request $request) {
    $validator = Validator::make($request->all(), [ 
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
    ]);

    if($validator->fails()) {
        return back()->with('errors', $validator->errors());
    }

    $signup = new NewsletterSignup;

    $signup->first = $request->input('first_name');

    $signup->last = $request->input('last_name');

    $signup->email = $request->input('email');

    $signup->save();

    Mail::to($signup->email)->send(new SignupResponse($signup->id));

    return back()->with('success', 'Thank you for signing up to the Sonsic newsletter!');
});