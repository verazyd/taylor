<?php

class VideosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /videos
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('videos.index_admin');
	}

    public function index_users()
    {
        return View::make('videos.index_users');
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /videos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('videos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /videos
	 *
	 * @return Response
	 */
	public function store()
	{
        $post = new Video;
        $post->title = Input::get('title');
        If(Input::hasFile('photo'))
        {
            $photo = Input::file('photo');
            $filename = time().'-'.$photo->getClientOriginalName();
            $destination = public_path().'/uploads/'.$filename;
            if(!File::exists($destination))
            {
                try
                {
                    $photo_path =  $photo->move(public_path().'/uploads/', $filename);
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
        return Redirect::to('videos')->with('message', 'Photo uploaded Successfully');
	}

	/**
	 * Display the specified resource.
	 * GET /videos/{id}
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
	 * GET /videos/{id}/edit
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
	 * PUT /videos/{id}
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
	 * DELETE /videos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}