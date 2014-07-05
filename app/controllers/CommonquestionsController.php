<?php

class CommonquestionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /commonquestions
	 *
	 * @return Response
	 */
	public function index()
	{
        $questions = Question::all();
		return View::make('commonquestions.index', compact('questions'));
	}

    public function index_admin()
    {
        $questions = Question::all();
        return View::make('commonquestions.admin_index', compact('questions'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /commonquestions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('commonquestions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /commonquestions
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Question::validate(Input::only('topic', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/commonCreate')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $question = new Question();
            $question->topic = Input::get('topic');
            $question->description = Input::get('description');

            if($question->save())
            {
                return Redirect::to('/common');
            }


        }
	}

	/**
	 * Display the specified resource.
	 * GET /commonquestions/{id}
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
	 * GET /commonquestions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$question = Question::find($id);
        return View::make('commonquestions.edit', compact('question'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /commonquestions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Question::validate(Input::only('topic', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/commonCreate')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $question = Question::find($id);
            $question->topic = Input::get('topic');
            $question->description = Input::get('description');

            if($question->save())
            {
                return Redirect::to('/common')->with('message', 'You have successfully updated the question');
            }


        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /commonquestions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$questions = Question::find($id);
        $questions->delete();
        return Redirect::to('/common')->with('message', 'You have successfully deleted the question');
	}

}