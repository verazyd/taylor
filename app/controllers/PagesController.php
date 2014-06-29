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
        $images = Post::where('is_carasaul', '=', 1)->get();

		return View::make('pages.index', compact('images'));
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
