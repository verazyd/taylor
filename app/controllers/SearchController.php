<?php

class SearchController extends \BaseController {

	public function index()
	{
//        $query = Request::get('query');
//        if($query)
//        {
//            $personal = DB::table('personals')->where('name', 'LIKE', "%$query%");
//
//            $results = DB::table('families')->where('name', 'LIKE', "%$query%")->union($personal)->get();
//
//            return View::make('search.index', compact('results'));
//
//        }
        $query = Request::get('query');
//    DB::statement('CREATE VIEW victories_view_name AS SELECT id, topic, description, created_at, updated_at FROM victories');
        if($query)
        {
            $victories = DB::table('victories_view_name')->where('topic', 'LIKE', "%$query%");
            $blogs = DB::table('blogs_view')->where('topic', 'LIKE', "%$query%");
            $personal = DB::table('personals')->where('name', 'LIKE', "%$query%");
            $results = DB::table('families')->where('name', 'LIKE', "%$query%")->union($blogs)->union($victories)->union($personal)->get();

            return View::make('search.index', compact('results'));
        }
    }

}