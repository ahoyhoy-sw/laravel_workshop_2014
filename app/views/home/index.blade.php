<!-- app/views/home/index.blade.php -->

@extends('layouts.master')

@section('title')
Home Page @parent
@stop

@section('content')
	<h1>Home Page</h1>
	@foreach($posts as $post)
	<h1>{{{ $post->title }}}</h1>
        <a href="{{ route('posts.show', $post->id) }}"> Read More </a>
	<br>
	@endforeach
@stop
