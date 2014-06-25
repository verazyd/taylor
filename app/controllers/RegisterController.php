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

	/**
	 * Store a newly created resource in storage.
	 * POST /register
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('email', 'password', 'password_confirmation');
        $this->adminregisterForm->validate($input);

        $user = User::create($input);
        Auth::login($user);
        return Redirect::to('admin_login');
	}
}