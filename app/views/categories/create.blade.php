<!-- app/views/categories/create.blade.php -->

@extends('layouts.master')

@section('title')
Categories - Create @parent
@stop

<!-- update content -->
@section('content')
	<h1>Create New Categories</h1>

	{{ Form::open(array('url' => '/', 'method' => 'put')) }}
	Category Id   : {{ Form::text('txtCategoryId', '') }} <br>
	Category Name : {{ Form::text('txtCategoryName', '') }} <br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}

@stop
