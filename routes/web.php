<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Models\NewsletterSignup;

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
        'email' => 'required',
    ]);

    if($validator->fails()) {
        return back()->with('errors', $validator->errors());
    }

    $signup = new NewsletterSignup;

    $signup->email = $request->input('email');

    $signup->save();

    return back()->with('success', 'Thank you for signing up to the Sonsic newsletter!');
});