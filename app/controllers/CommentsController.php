<?php

class CommentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /comments
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /comments/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comments
	 *
	 * @return Response
	 */
	public function store()
	{
        $post = Post::findOrFail(Input::get('post_id'));

        $comment = new Comment();

        $comment->fill(Input::all());
        $comment->post_id = Input::get('post_id');

        $comment->save();

        return Redirect::action('PostsController@show', array('id' => $post->id))->withMessage('Comment has been saved.');
	}

	/**
	 * Display the specified resource.
	 * GET /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /comments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /comments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}