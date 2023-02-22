<?php

namespace classes;

class viewsValidator extends Validator
{

    public function validate(string $param) :bool
    {
        if (!filter_var($param, FILTER_VALIDATE_INT) || $param<0) {
            return true;
        }
        else {
            return false;
        }
    }
    public function checkError(bool $setting) :string
    {
        if($setting) {
            return  "<strong class='text-danger'>Ви невірно вказали перегляди.</strong>";
        }
        else {
            return '';
        }
    }
}