<?php

class Tag extends \Eloquent {
	protected $fillable = ['name'];

    public static function validate($input)
    {
        $rules = [
            'name' => 'required'
        ];
        return Validator::make($input, $rules);
    }
    public function blog()
    {
        return $this->hasMany('Blog');
    }
}