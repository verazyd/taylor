<?php

class VictoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /victories
	 *
	 * @return Response
	 */
	public function index()
	{
        $victories = Victory::orderBy('created_at', 'desc')->where('is_published', '=', 1)->paginate(10);
		return View::make('victories.index', compact('victories'));
	}

    public function index_admin()
    {
        $victories = Victory::all();
        return View::make('victories.admin_index', compact('victories'));
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /victories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('victories.admin_create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /victories
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Victory::validate(Input::only('topic', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/victories/create')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $victory = new Victory();
            $victory->topic = Input::get('topic');
            $victory->description = Input::get('description');

            if($victory->save())
            {
                return Redirect::to('/admin_login');
            }


        }

    }

	/**
	 * Display the specified resource.
	 * GET /victories/{id}
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
	 * GET /victories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$victory = Victory::find($id);
        return View::make('victories.edit', compact('victory'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /victories/{id}
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
	 * DELETE /victories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

    public function publish_victory($id)
    {
        $victory = Victory::find($id);
        $victory->is_published = 1;
        $victory->save();
        return Redirect::to('/allVictories')->with("success", "Successfully published $victory->name");
    }

    public function hide_victory($id)
    {
        $victory = Victory::find($id);
        $victory->is_published = 0;
        $victory->save();
        return Redirect::to('/allVictories')->with("success", "Successfully published $victory->name");
    }

}