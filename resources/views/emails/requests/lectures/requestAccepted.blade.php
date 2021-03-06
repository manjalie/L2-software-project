@component('mail::message')
# Request for  {{$class_request->subject->name}} Accepted

Hi {{$class_request->lecturer->user->first_name}},

we are glad to say that we accept your following course request and we'll notify about new classes soon.

your request was,<br>
Subject : {{$class_request->subject->name}}<br>
Day : {{$class_request->day}}<br>
From : {{\Carbon\Carbon::parse($class_request->start_time)->format('g:i A')}}
To : {{\Carbon\Carbon::parse($class_request->end_time)->format('g:i A')}}

you can review your request
@component('mail::button', ['url' => 'http://localhost:8000/lecturer/applyHistory'])
Check Request
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
