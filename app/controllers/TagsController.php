<?php

class TagsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /tags
	 *
	 * @return Response
	 */
	public function index()
	{
		$tags = Tag::all();
        return View::make('admins.tags.index', compact('tags'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /tags/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admins.tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /tags
	 *
	 * @return Response
	 */
	public function store()
	{

        $validator = Tag::validate(Input::only('name'));

        if($validator->fails())
        {
            return Redirect::to('/createTag')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $tag = new Tag;
            $tag->name = Input::get('name');
            $tag->save();
            return Redirect::to('tags')->with('message', 'Tag was successfully created');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /tags/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $tag = Tag::find($id);
        $blogs = Blog::where('tag_id', '=', $id)->get();
        return View::make('blogs.blog_with_cats', compact('tag', 'blogs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /tags/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $tag = Tag::find($id);
        return View::make('admins.tags.edit', compact('tag'));

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /tags/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Tag::validate(Input::only('name'));

        if($validator->fails())
        {
            return Redirect::to('/createTag')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $tag = Tag::find($id);
            $tag->name = Input::get('name');
            $tag->save();
            return Redirect::to('tags')->with('message', 'Tag was successfully Updated!');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /tags/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $tag = Tag::find($id);
        if($tag->delete())
        {
            return Redirect::to('/tags');
        }
	}

}