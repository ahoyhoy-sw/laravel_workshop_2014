<!-- app/views/posts/create.blade.php -->

@extends('layouts.master')

@section('title')
Posts - Create @parent
@stop

<!-- update content -->
@section('content')
	<h1>Create New Post</h1>

	{{ Form::open(array('route' => 'posts.store', 'method' => 'POST')) }}
	Title   : {{ Form::text('title', '') }} <br>
	Category: {{ Form::text('category_id', '') }} <br>
	Content : {{ Form::textarea('content', '') }} <br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}

@stop
