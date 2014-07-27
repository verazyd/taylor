<?php
use Acme\Forms\AdminLogin;
class SessionsController extends \BaseController {

    protected $adminLogin;

    function __construct(AdminLogin $adminLogin)
    {
        $this->adminLogin = $adminLogin;
    }

    /**
	 * Display a listing of the resource.
	 * GET /sessions
	 *
	 * @return Response
	 */
	public function index()
	{
        if(Auth::check())
        {
            return View::make('admins.index');
        }
        return View::make('admins.create');


	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admins.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only(['email', 'password']);
        $this->adminLogin->validate($input);

            if(Auth::attempt($input)){
                return Redirect::to('admin_login'); //takes you to the place where you were before logged in
            }
            return Redirect::back()->withInput()->withFlashMessage('Invalid Credentials Provided');

	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id=null)
	{
        Auth::logout();
        return Redirect::to('admin_login');
	}

}