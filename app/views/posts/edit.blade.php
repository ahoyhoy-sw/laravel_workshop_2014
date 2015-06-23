<!-- app/views/posts/edit.blade.php -->

@extends('layouts.master')

@section('title')
Post - Edit @parent
@stop

<!-- update content -->
@section('content')
	<h1>Edit Post</h1>

	{{ Form::open(array('route' => ['posts.update', $post->id], 'method' => 'PATCH')) }}
	Title    : {{ Form::text('title', '') }} <br>
	Category : {{ Form::text('category_id', '') }} <br>
	Content  : {{ Form::textarea('content', '') }} <br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}
@stop
