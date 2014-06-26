<?php

class PagesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /pages
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pages.index');
	}
    public function about()
    {
        return View::make('pages.about');
    }
    public function commonQuestions()
    {
        return View::make('pages.commonquestions');
    }
}
