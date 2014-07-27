<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 6/17/14
 * Time: 8:15 PM
 */

namespace Acme\Forms;


use Laracasts\Validation\FormValidator;

class AdminRegisterForm extends FormValidator{
    protected  $rules = [
        'name'      => 'required',
        'email'      => 'required|email|unique:users',
        'password' => 'required|confirmed'
    ];
} 