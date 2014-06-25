<?php

function errors_for($attribute, $errors){
    return $errors->first($attribute, '<span class="error">:message</span>');
}
// set_path
function set_active($path, $active= 'active')
{
    return Request::is($path) ? $active: '';
}