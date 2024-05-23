@component('mail::message')
# Customer contact info

@if(!empty($name))
  # Name
  {{$name}}
@endif

@if(!empty($phone))
  # Phone Number
  {{$phone}}
@endif

@if(!empty($email))
  # Email
  {{$email}}
@endif

@if(!empty($subject))
  # Subject
  {{$subject}}
@endif

@if(!empty($message))
  # Message
  {{$message}}
@endif

@endcomponent
