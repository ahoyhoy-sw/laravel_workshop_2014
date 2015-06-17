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

// Route::[get/post/patch/delete/]('[url]/{var}', function($var){})
//Route::get('/', function()
//{
//	return View::make('hello');
//});

/* Laravel workshop */
Route::pattern('id', '[0-9]+');

// HEAD
Route::get('/', function()
{
	return 'HEAD Pages';
});

// About
Route::get('about', function()
{
	return 'About Pages';
});

// Categories
Route::get('categories/{id?}', function($id = 0)
{
	return 'Categories: ' . $id; 
});

Route::get('categories/create', function()
{
	return 'Create Categories';
});


Route::get('categories/{id}/edit', function($id)
{
	return 'Edit Categories' . $id;
});

// Posts
Route::get('posts/{id?}', function($id = 0)
{
	return 'Post: ' .$id;
});


Route::get('posts/create', function()
{
	return 'Create Post';
});

Route::get('posts/{post_id}/edit', function($post_id)
{
	return 'Edit Post' . $post_id;
})
-> where('post_id', '[0-9]+');

// Random
Route::get('random', function()
{
	return 'Random' . rand(1, 10);
});

// Login
Route::get('login', function()
{
	return 'Login pages';
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
