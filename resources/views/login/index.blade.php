@extends('template.main')

@section('title')
	Login
@endsection

@section('content')
<h1>Login content</h1>
<form action="{{ route('login.auth') }}" method="post">
	@csrf
	@if (session('message'))
		<h2>{{ session('message') }}</h2>
	@endif
	@error('email')
		<span>{{ $message }}</span>
		<br>
	@enderror
	<input type="text" name="email" value="email@gmail.com">
	<br>
	<input type="password" name="password" value="verysafepassword">
	<br>
	<input type="submit" value="Login">
</form>
@endsection