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
        //Gett all posts from the database
		$posts = Post::all();

        //Show the list with all posts
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
        //Show the form for create a new post
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
        //Get the post from the database or die with an error
        $post = new Post();

        //Fill object with all the POST arguments which are allowed in Models\Post->fillable
        $post->fill(Input::all());

        //Save the object into the database
        $post->save();

        //Redirect to the post page with a success message
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
        //Find the post or die with an error
        $post = Post::findOrFail($id);

        //Show the page of a specific post
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
        //Get the post from the database or die with an error
        $post = Post::findOrFail($id);

        //Fill the databse object with new values given via POST (only the ones allowed in Post->fillable)
        $post->fill(Input::all());
        $post->save();

        //Redirect to the post page with a success message
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