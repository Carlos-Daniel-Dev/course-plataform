@extends('template.main')

@section('title')
	Create course
@endsection

@section('content')
<h1>Create course</h1>
<form action="{{ route('courses.store') }}" method="post">
	@csrf

	<input type="text" name="title" value="PHP for begginers">
	<br>
	<textarea name="description" value="A php course to new php programmers" cols="30" rows="10"></textarea>
	<br>
	<label for="category">Category</label>
	<select name="category" id="user_type">
        <option value="Programming">Programming</option>
		<option value="Web Development">Web Development</option>
		<option value="Data Science">Data Science</option>
		<option value="Design">Design</option>
		<option value="Business">Business</option>
		<option value="Marketing">Marketing</option>
		<option value="Language Learning">Language Learning</option>
		<option value="Finance">Finance</option>
		<option value="Health and Fitness">Health and Fitness</option>
		<option value="Music">Music</option>
		<option value="Photography">Photography</option>
		<option value="Cooking">Cooking</option>
		<option value="Art and Crafts">Art and Crafts</option>
		<option value="Science">Science</option>
		<option value="History">History</option>
		<option value="Mathematics">Mathematics</option>
		<option value="Personal Development">Personal Development</option>
		<option value="Technology">Technology</option>
		<option value="Environmental Studies">Environmental Studies</option>
		<option value="Psychology">Psychology</option>
    </select>
    <br>
    <input type="number" name="price"> <span>$</span></input>
    <br>
	<input type="submit" value="Create Course">
</form>
@endsection