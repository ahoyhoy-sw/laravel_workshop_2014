<!-- app/views/posts/create.blade.php -->

@extends('layouts.master')

@section('title')
Posts - Create @parent
@stop

<!-- update content -->
@section('content')
	<h1>Create New Post</h1>

	{{ Form::open(array('url' => '/', 'method' => 'put')) }}
	Title   : {{ Form::text('txtPostTitle', '') }} <br>
	Category: {{ Form::text('txtPostCategroy', '') }} <br>
	Content : {{ Form::textarea('txtPostCotent', '') }} <br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}

@stop
