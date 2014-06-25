<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 6/17/14
 * Time: 5:14 PM
 */

namespace Acme\Forms;


use Laracasts\Validation\FormValidator;

class AdminLogin extends FormValidator{
    protected  $rules = [
        'email'      => 'required|email',
        'password'   => 'required'
    ];
} 