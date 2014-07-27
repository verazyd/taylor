<?php

class PersonalinjuriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /personalinjuries
	 *
	 * @return Response
	 */
	public function index()
	{
        $personals = Personal::all();
		return View::make('personals.index', compact('personals'));
	}

    public function admin_index()
    {
        $personals = Personal::all();
        return View::make('personals.admin_index', compact('personals'));
    }


    /**
	 * Show the form for creating a new resource.
	 * GET /personalinjuries/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('personals.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /personalinjuries
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Personal::validate(Input::only('name', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/addPersonalInjuryService')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $personal = new Personal();
            $personal->name = Input::get('name');
            $personal->description = Input::get('description');
            $personal->save();
            return Redirect::to('allPersonalInjury')->with('message', 'Personal Injury Practice Area was successfully created');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /personalinjuries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $service = Personal::find($id);
		return View::make('personals.show', compact('service'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /personalinjuries/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $injury_type = Personal::find($id);
        return View::make('personals.edit', compact('injury_type'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /personalinjuries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Personal::validate(Input::only('name', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/allPersonalInjury')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $service_type = Personal::find($id);
            $service_type->name = Input::get('name');
            $service_type->description = Input::get('description');
            $service_type->save();
            return Redirect::to('allPersonalInjury')->with('message', 'Service was successfully Updated!');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /personalinjuries/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $injury_type = Personal::find($id);
        if($injury_type->delete())
        {
            return Redirect::to('/allPersonalInjury');
        }
	}

}