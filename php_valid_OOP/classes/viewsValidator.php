<?php

namespace classes;

class viewsValidator extends Validator
{

    public function validate(string $param) :string
    {
        if (!filter_var($param, FILTER_VALIDATE_INT) || $param<0) {
            return "<strong class='text-danger'>Ви невірно вказали перегляди.</strong>";
        }
        else {
            return '';
        }
    }
}