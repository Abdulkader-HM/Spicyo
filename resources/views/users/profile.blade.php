@extends('layouts.layout')

@section('cont')
<br>
<br>
<div class="card-container">
	@if(Auth::user()->is_admin == 1)
	<span class="pro">PRO</span>
	@endif

	@if(Auth::user()->profile)
	<img class="round" src="{{ URL::asset('images/users/'.Auth::user()->profile->image) }}" alt="user" />
	@else
	<img class="round" src="{{ URL::asset('images/profile/scary.gif') }}" alt="user" />
	@endif
	<h3 style="color: red">Name : {{ Auth::user()->name }}</h3>
	<h4 style="color: red">Email:{{ Auth::user()->email }}</h4>
	@if(Auth::user()->profile)
	<h4 style="color: red">Phone:{{ Auth::user()->profile->phone }}</h4>
	<h4 style="color: red">Address:{{ Auth::user()->profile->address }}</h4>
	@else
	@endif
	{{-- <h4 style="color: red">Email:{{ Auth::user()->email }}</h4> --}}

	{{-- <p>User interface designer and <br/> front-end developer</p> --}}
	<div class="buttons">
		<button class="primary">
			Message
		</button>
		@if(Auth::user()->profile)
		<a href='{{ route('edit',Auth::user()->id) }}' class='btn btn-primary' class="primary ghost">
			Edit Profile
		</a>
		@else
		<a href='{{ route('create') }}' class='btn btn-primary' class="primary ghost">
			Complete Profile
		</a>
		@endif
	</div>
	<div class="skills">
		{{-- <h6>Skills</h6>
		<ul>
			<li>UI / UX</li>
			<li>Front End Development</li>
			<li>HTML</li>
			<li>CSS</li>
			<li>JavaScript</li>
			<li>React</li>
			<li>Node</li>
		</ul> --}}
	</div>
</div>


@endsection

@section('footer')
@endsection