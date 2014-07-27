<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 7/8/14
 * Time: 1:46 PM
 */

namespace Acme\Repo;


class TestimonialRepo implements TestimonialRepoInterface{
    public function getAll()
    {
        return \Testimonial::orderBy('created_at', 'DESC')->get();
    }
    public function getById($id)
    {
        return \Testimonial::find($id);
    }
} 