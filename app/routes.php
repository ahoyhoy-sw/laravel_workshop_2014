<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/* test ORM
Route::get('/', function()
{
	$posts = Post::all();
	foreach($posts as $post) {
		echo $post->title . ' - ' . $post->category->name . '<br>';
		foreach($post->comments as $comment) {
			echo '+  ' . $comment->content;
		}
	}
});
*/
