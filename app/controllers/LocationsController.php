<?php

class LocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /locations
	 *
	 * @return Response
	 */
	public function index()
	{
        $locations = Location::all();
		return View::make('locations.index', compact('locations'));
	}
    public function index_admin()
    {
        $locations = Location::all();
        return View::make('locations.index_admin', compact('locations'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /locations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('locations.admin_create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /locations
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Location::validate(Input::only('address', 'city', 'state', 'zip'));

        if($validator->fails())
        {
            return Redirect::to('/location/create')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $location = new Location;
            $location->address = Input::get('address');
            $location->city = Input::get('city');
            $location->state = Input::get('state');
            $location->zip = Input::get('zip');

            if($location->save())
            {
                return Redirect::to('/location/create');
            }


        }
	}

	/**
	 * Display the specified resource.
	 * GET /locations/{id}
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
	 * GET /locations/{id}/edit
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
	 * PUT /locations/{id}
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
	 * DELETE /locations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}