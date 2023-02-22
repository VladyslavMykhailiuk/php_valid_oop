<?php

namespace classes;

class dateValidator extends Validator
{

    public function validate(string $param) :string
    {
        if($param !== date('Y-m-d')){
            return "<strong class='text-danger'>Ви вказали не поточну дату.</strong>";
        }
        else {
            return '';
        }
    }
}