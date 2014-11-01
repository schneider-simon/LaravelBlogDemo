<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{

		$posts = Post::all();
        return View::make('posts.index', array('posts' => $posts));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
        $post = new Post();
        $post->title = Input::get('title');
        $post->content = Input::get('content');

        $post->save();

        return Redirect::action('PostsController@show', array('id' => $post->id))->withMessage('Post has been saved.');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $post = Post::findOrFail($id);
        return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $post = Post::findOrFail($id);

        $post->title = Input::content('title');
        $post->content = Input::content('content');

        $post->save();

        return Redirect::action('PostsController@show', array('id' => $post->id))->withMessage('Post has been updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $post = Post::findOrFail($id);
        $post->delete();

        return Redirect::action('PostsController@index')->withMessage('Post deleted :(');
	}

}