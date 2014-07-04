<?php
use Acme\Forms\ContactusForm;
class ContactusController extends \BaseController {

    protected $contactusForm;

    function __construct(ContactusForm $contactusForm)
    {
        $this->contactusForm = $contactusForm;
    }

    /**
	 * Display a listing of the resource.
	 * GET /contactus
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /contactus/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contactus.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contactus
	 *
	 * @return Response
	 */
	public function store()
	{
        $fromEmail = Input::get('email');
        $fromName = Input::get('from');
        $subject = Input::get('subject');
        $data = array('description' =>Input::get('description'));

        $toEmail = 'rayx.dev@gmail.com';
        $toName = 'Shankar Giri';


        Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
        {
            $message->to($toEmail, $toName);

            $message->from($fromEmail, $fromName);

            $message->subject($subject);
        });


//        Mail::send('emails.contact',$data,
//            function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject){
//                $message->to($toEmail, $toName);
//                $message->from($fromEmail, $fromName);
//                $message->subject($subject);
//            });
        return Redirect::to('/contactus')->with('message', 'Your message has been successfully send');
	}

	/**
	 * Display the specified resource.
	 * GET /contactus/{id}
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
	 * GET /contactus/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contactus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /contactus/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}