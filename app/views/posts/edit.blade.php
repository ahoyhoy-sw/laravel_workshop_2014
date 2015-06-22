<!-- app/views/posts/edit.blade.php -->

@extends('layouts.master')

@section('title')
Post - Edit @parent
@stop

<!-- update content -->
@section('content')
	<h1>Update Post</h1>

	{{ Form::open(array('url' => '/', 'method' => 'put')) }}
	Title    : {{ Form::text('txtPostTitle', '') }} <br>
	Category : {{ Form::text('txtPostCategory', '') }} <br>
	Content  : {{ Form::textarea('txtPostContent', '') }} <br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}
@stop
