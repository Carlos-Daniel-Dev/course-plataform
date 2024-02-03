@extends('template.main')

@section('title')
	Home
@endsection

@section('content')

@if (session('message'))
	<h2>{{ session('message') }}</h2>
@endif
@if (session('logado'))
	<h2>{{ session('logado') }}</h2>
@endif


<h1>Home content</h1>
@endsection