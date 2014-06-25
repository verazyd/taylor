<?php

class AddimagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /addimages
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Post::orderBy('created_at', 'desc')->paginate(20);
        return View::make('admins.images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /addimages/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admins.images.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /addimages
	 *
	 * @return Response
	 */
	public function store()
	{
        //validate
        $post = new Post;
        $post->title = Input::get('title');
        If(Input::hasFile('photo'))
        {
            $photo = Input::file('photo');
            $filename = time().'-'.$photo->getClientOriginalName();
            $destination = public_path().'/img/'.$filename;
            if(!File::exists($destination))
            {
                try
                {
                   $photo_path =  $photo->move(public_path().'/img/', $filename);
                    $post->url =$filename;
                }catch (Fileexception $e)
                {
                    return 'Sorry, Could not upload the file! Please, try again later!!';
                }
            }
            else
            {
                return 'This File already exist!! Please, upload another file!!!';
            }
        }
        $post->save();
        return Redirect::to('admin_addImages')->with('message', 'Photo uploaded Successfully');
	}

	/**
	 * Display the specified resource.
	 * GET /addimages/{id}
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
	 * GET /addimages/{id}/edit
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
	 * PUT /addimages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $image = Post::find($id);
        $image->is_carasaul = Input::get('is_carasaul') ? Input::get('is_carasaul') : 0 ;
        $image->save();
        return Redirect::to('/images');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /addimages/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}