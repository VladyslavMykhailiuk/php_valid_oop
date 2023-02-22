<?php

namespace classes;

class emailValidate extends Validator
{

    public function validate(string $param) :string
    {
        if (!filter_var($param, FILTER_VALIDATE_EMAIL)) {
            return "<strong class='text-danger'>Вказано невірний формат e-mail.</strong>";
        }
        else {
            return '';
        }
    }
}