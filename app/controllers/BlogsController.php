<?php

class BlogsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /blogs
	 *
	 * @return Response
	 */
	public function index()
	{
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
		return View::make('blogs.index', compact('blogs'));
	}

    public function index_users()
    {
        $tags = Tag::all();
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return View::make('blogs.index_user', compact('blogs', 'tags'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /blogs/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $tags = Tag::all();
		return View::make('blogs.create', compact('tags'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /blogs
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Blog::validate(Input::only('topic', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/create')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $blog = new Blog;
            $blog->topic = Input::get('topic');
            $blog->tag_id = Input::get('tag_id');
            $blog->description = Input::get('description');

            if($blog->save())
            {
                return Redirect::to('/blogs');
            }


        }

	}

	/**
	 * Display the specified resource.
	 * GET /blogs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$blog = Blog::find($id);
        return View::make('blogs.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /blogs/{id}/edit
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
	 * PUT /blogs/{id}
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
	 * DELETE /blogs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blog = Blog::find($id);
        if($blog->delete())
        {
            return Redirect::to('/blogs');
        }
	}

}