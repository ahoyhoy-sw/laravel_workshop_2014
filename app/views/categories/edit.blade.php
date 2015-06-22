<!-- app/views/categories/edit.blade.php -->

@extends('layouts.master')

@section('title')
Categories - Edit @parent
@stop

<!-- update content -->
@section('content')
	<h1>Update Category</h1>

	{{ Form::open(array('url' => '/', 'method' => 'put')) }}
	Category Id   : {{ Form::text('txtCategoryId', '') }} <br>
	Category Name : {{ Form::text('txtCategoryName', '') }} <br>
	{{ Form::submit('Submit') }}
	{{ Form::close() }}
@stop
