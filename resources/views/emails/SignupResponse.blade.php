@component('mail::message')
# Hi {{$user->first}},

Thank you for you for joining the Sonsic waitlist!  While you'll be the first to know
all of the latest Sonsic news, make sure to follow our social media below to always stay up to date!

@component('mail::button', ['url' => '', 'color' => 'primary'])
Button Text
@endcomponent

We look forward to,<br>
{{ config('app.name') }}
@endcomponent
