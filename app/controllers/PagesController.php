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
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->limit(1)->get();
		return View::make('pages.index', compact('images', 'testimonials'));
	}
    public function our_staff()
    {
        return View::make('pages.ourstaff');
    }
    public function commonQuestions()
    {
        return View::make('pages.commonquestions');
    }
}
