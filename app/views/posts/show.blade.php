<!-- app/views/home/posts/show.blade.php -->

@extends('layouts.master')

@section('title')
Posts Show @parent
@stop

@section('content')
	<h1> Posts.Show - TEST </h1>
	<h1>{{{ $post->title }}}</h1>
	<p>{{{ $post->content }}}</p>
@stop
