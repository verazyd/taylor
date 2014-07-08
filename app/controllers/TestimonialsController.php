<?php
use \Acme\Repo\TestimonialRepoInterface;

/**
 * Class TestimonialsController
 */
class TestimonialsController extends \BaseController {


    /**
     * @var Acme\Repo\TestimonialRepoInterface
     */

    private $testimonailRepo;

    function __construct(TestimonialRepoInterface $testimonailRepo)
    {
        $this->testimonailRepo = $testimonailRepo;
    }

    /**
	 * Display a listing of the resource.
	 * GET /testimonials
	 *
	 * @return Response
	 */
	public function index()
	{
        $testimonials = $this->testimonailRepo->getAll();
		return View::make('testimonials.index', compact('testimonials'));
	}


    public  function admin_index()
    {
        $testimonials = $this->testimonailRepo->getAll();
        return View::make('testimonials.admin_index', compact('testimonials'));
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /testimonials/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('testimonials.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /testimonials
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Testimonial::validate(Input::only('name','email', 'location', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/createTestimonial')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $testimonial = new Testimonial();
            $testimonial->name = Input::get('name');
            $testimonial->email = Input::get('email');
            $testimonial->location = Input::get('location');
            $testimonial->description = Input::get('description');
            $testimonial->save();
            return Redirect::to('allTestimonials')->with('message', 'Testimonial was successfully created');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /testimonials/{id}
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
	 * GET /testimonials/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $testimonial = $this->testimonailRepo->getById($id);
        return View::make('testimonials.edit', compact('testimonial'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /testimonials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $validator = Testimonial::validate(Input::only('name','email', 'location', 'description'));

        if($validator->fails())
        {
            return Redirect::to('/createTestimonial')->withErrors($validator)->withInput(Input::all());
        }
        else
        {
            $testimonial = $this->testimonailRepo->getById($id);
            $testimonial->name = Input::get('name');
            $testimonial->email = Input::get('email');
            $testimonial->location = Input::get('location');
            $testimonial->description = Input::get('description');
            $testimonial->save();
            return Redirect::to('allTestimonials')->with('message', 'Testimonial was successfully updated');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /testimonials/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $testimonial = $this->testimonailRepo->getById($id);
        $testimonial->delete();
        return Redirect::to('allTestimonials')->with('message', 'Testimonial was successfully deleted');

	}

}