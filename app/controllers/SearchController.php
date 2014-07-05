<?php

class SearchController extends \BaseController {

	public function index()
	{
        $query = Request::get('query');
        if($query)
        {
            $personal = DB::table('personals')->where('name', 'LIKE', "%$query%");

            $results = DB::table('families')->where('name', 'LIKE', "%$query%")->union($personal)->get();

            return View::make('search.index', compact('results'));

        }
    }

}