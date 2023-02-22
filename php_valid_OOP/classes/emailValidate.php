<?php

namespace classes;

class emailValidate extends Validator
{

    public function validate(string $param) :bool
    {
        if (!filter_var($param, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        else {
            return false;
        }
    }
    public function checkError(bool $setting) :string
    {
        if($setting) {
            return  "<strong class='text-danger'>Вказано невірний формат e-mail.</strong>";
        }
        else {
            return '';
        }
    }
}