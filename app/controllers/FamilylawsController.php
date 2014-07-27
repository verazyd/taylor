<?php

class FamilylawsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /familylaws
	 *
	 * @return Response
	 */
	public function index()
	{
        $family_laws = Family::all();
		return View::make('families.index', compact('family_laws'));
	}
    public function admin_index(){
        $family_laws = Family::all();
        return View::make('families.admin_index', compact('family_laws'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /familylaws/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('families.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /familylaws
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Family::validate(Input::only('name', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/allfamilyLaws')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $family = new Family();
            $family->name = Input::get('name');
            $family->description = Input::get('description');
            $family->save();
            return Redirect::to('allfamilyLaws')->with('message', 'Family Law Practice Area was successfully created');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /familylaws/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $service = Family::find($id);
        return View::make('personals.show', compact('service'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /familylaws/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$family_law = Family::find($id);
        return View::make('families.edit', compact('family_law'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /familylaws/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Family::validate(Input::only('name', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/allfamilyLaws')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $family = Family::find($id);
            $family->name = Input::get('name');
            $family->description = Input::get('description');
            $family->save();
            return Redirect::to('allfamilyLaws')->with('message', 'Family Law Practice Area was successfully updated!');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /familylaws/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$family = Family::find($id);
        $family->delete();
        return Redirect::to('allfamilyLaws')->with('message', 'Family Law Practice Area was successfully Deleted!');
	}

}