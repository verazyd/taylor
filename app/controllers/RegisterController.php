<?php
use Acme\Forms\AdminRegisterForm;
class RegisterController extends \BaseController {

    protected $adminregisterForm;

    function __construct(AdminRegisterForm $adminregisterForm)
    {
        $this->adminregisterForm = $adminregisterForm;
    }
	public function create()
	{
		return View::make('users.create');
	}
    public  function index()
    {
        $names = User::all();
        return View::make('users.index', compact('names'));
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /register
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('name', 'email', 'password', 'password_confirmation');
        $this->adminregisterForm->validate($input);

        $user = User::create($input);
        $user->save();
//        Auth::login($user);
        return Redirect::to('admin_login');
	}
    public function update($id)
    {
        $name = User::find($id);
        $name->is_admin = Input::get('is_admin') ? Input::get('is_admin') : 0 ;
        $name->save();
        return Redirect::to('/users');
    }
}