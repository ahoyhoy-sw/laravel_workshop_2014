<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		$data = compact('posts');	// equal to ->with('posts', $posts);
		return View::make('home.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Input::all();

		// validation
//		$validation = Validator::make($inputs, Post::rules);
//		if ($validation->fails())
//			return Redirect::back()->withErrors($validation)->withInput();
		
		// Store
		Post::create($inputs);		// field_name@Form must match with model name

		//$post = new Post;
		//$post->title = $inputs["title"];
		//$post->category_id = intval($inputs["category_id"]);
		//$post->content = $inputs["content"];
		//$post->save();

		return Redirect::route('posts.index')->with('success', 'Successfully@@');	// $message?
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$post = Post::findOrFail($id);
		$comments = $post->comments;

		$data = compact('post', 'comments');
		
		// ->with('name', value)
//		return View::make('posts.show')->with('post', $post);
		return View::make('posts.show', $data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Post::find($id);
		if(is_null($post))
			App::abort(404);	// throw NofFoundHttpException with $code=404

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$inputs = Input::all();

		// input validation
		$post = Post::findOrFail($id);
		$post->update($inputs);		// field_name must match with key_name
		//return Redirect::route('posts.index')->with('failed', 'Failed!!');
		return Redirect::route('posts.index')->with('success', 'Update Ok!!');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Post::destroy($id);

		//$post = findOrFail($id);
		return Redirect::route('posts.index');
	}


}
