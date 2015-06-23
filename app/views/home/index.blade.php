<!-- app/views/home/index.blade.php -->

@extends('layouts.master')

@section('title')
Home Page @parent
@stop

@section('content')
	@include('partials.notifications')

	@include ('partials.sidebar')
	<h1>Home Page</h1>
	@foreach($posts as $post)
	<h1>{{{ $post->title }}}</h1>
        <a href="{{ route('posts.show', $post->id) }}"> Read More </a><br>
        <a href="{{ route('posts.edit', $post->id) }}"> Edit </a><br>
        <a href="{{ route('posts.destroy', $post->id) }}"> Remove </a><br>
	@endforeach
@stop
