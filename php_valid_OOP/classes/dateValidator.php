<?php

namespace classes;

class dateValidator extends Validator
{

    public function validate(string $param) :bool
    {
        if($param !== date('Y-m-d')){
            return true;
        }
        else {
            return false;
        }
    }
    public function checkError(bool $setting) :string
    {
        if($setting) {
            return  "<strong class='text-danger'>Ви вказали не поточну дату.</strong>";
        }
        else {
            return '';
        }
    }
}