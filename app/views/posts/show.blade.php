<!-- app/views/home/posts/show.blade.php -->

@extends('layouts.master')

@section('title')
Posts Show @parent
@stop

@section('content')
	<h1> Posts.Show - TEST </h1>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->content }}}</p>
	<hr>
	<h2> Comments </h2>
	@foreach($comments as $comment)
	{{{ $comment->name }}} <br>
	{{{ $comment->content }}} <br>
	@endforeach
@stop
