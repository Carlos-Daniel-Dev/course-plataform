@extends('template.main')

@section('title')
	Register
@endsection

@section('content')
<h1>Register content</h1>
<form action="{{ route('register.store') }}" method="post">
	@csrf
	
	@error('email')
		<span>{{ $message }}</span>
		<br>
	@enderror
	<input type="text" name="name" value="Carlos">
	<br>
	<input type="text" name="email" value="email@gmail.com">
	<br>
	<input type="password" name="password" value="verysafepassword">
	<br>
	<label for="user_type">You are a: </label>
	<select name="user_type" id="user_type">
        <option value="Student">Student</option>
        <option value="Instructor">Instructor</option>
    </select>
    <br>
	<input type="submit" value="Register">
</form>
@endsection