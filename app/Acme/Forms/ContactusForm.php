<?php
/**
 * Created by PhpStorm.
 * User: scorexing
 * Date: 6/16/14
 * Time: 11:25 PM
 */

namespace Acme\Forms;

use Laracasts\Validation\FormValidator;

class ContactusForm extends FormValidator{
    protected  $rules = [
        'email' => 'required|email',
        'from' => 'required',
        'subject' => 'required',
        'description' => 'required'

    ];
} 