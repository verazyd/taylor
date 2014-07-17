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
        $victories = Victory::orderBy('created_at', 'DESC')->limit(4)->get();
        $blogs = Blog::orderBy('created_at', 'DESC')->limit(4)->get();
        $images = Post::where('is_carasaul', '=', 1)->get();
        $testimonials = Testimonial::orderBy('created_at', 'DESC')->limit(1)->get();
		return View::make('pages.index', compact('images', 'testimonials', 'victories', 'blogs'));
	}
    public function our_staff()
    {
        $personals = Personal::all();
        $victories = Victory::orderBy('created_at', 'DESC')->limit(7)->get();
        return View::make('pages.ourstaff', compact('personals', 'victories'));
    }
    public function commonQuestions()
    {
        return View::make('pages.commonquestions');
    }
}
