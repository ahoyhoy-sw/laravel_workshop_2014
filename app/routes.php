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
//------------------------------------------------------------------------------
// + Controller, Views
// View::maks('{url}', '{param}');

// home
Route::get('/', function()
{
	return View::make('home.index');
});

// categories
Route::get('categories/create', function()
{
	return View::make('categories.create');
});

Route::get('categories/show', function()
{
	// pass single value, $name @View
//	$data = array('name' => 'test_value');
//	return View::make('categories.show', $data);

	// pass array ($name1, $nam2 @View)
//	$data = array('name1' => 'test_value', 'name2' => 'test_value2');
//	return View::make('categories.show', $data);
	
	// pas  2-d array
	$categories = Category::all();
	return View::make('categories.show', $categories);

});

Route::get('categories/edit', ['as' => 'cat.edit', function()
{
	return View::make('categories.edit');
}]);

// posts
Route::get('posts', ['as' => 'posts.index', 'uses' => 'PostsController@index']);
Route::get('posts/create', ['as' => 'posts.create', 'uses' => 'PostsController@create']);
Route::post('posts', ['as' => 'posts.store', 'uses' => 'PostsController@store']);
Route::get('posts/{id}', ['as' => 'posts.show', 'uses' => 'PostsController@show']);
Route::get('posts/{id}/edit', ['as' => 'posts.edit', 'uses' => 'PostsController@edit']);
Route::patch('posts/{id}', ['as' => 'posts.update', 'uses' => 'PostsController@update']);
Route::delete('posts/{id}', ['as' => 'posts.destroy', 'uses' => 'PostsController@destroy']);


//------------------------------------------------------------------------------
/* Laravel workshop */
/*
Route::pattern('id', '[0-9]+');

// HEAD
Route::get('/', function()
{
	return View::make('blog-home');
});

Route::get('blog-post', function()
{
	return View::make('blog-post');
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
*/

//------------------------------------------------------------------------------
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
