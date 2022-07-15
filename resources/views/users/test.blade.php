
@if(Auth::user()->profile->phone )
phone
@else
{{ Auth::user()->profile->image}}
@endif