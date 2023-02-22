<?php

namespace classes;

class categoryValidate extends Validator
{

    public function validate(string $param) :bool
    {
            if($param == '') {
                return true;
            }
            else {
                return false;
            }
    }
    public function checkError(bool $setting) :string
    {
        if($setting) {
            return  "<strong class='text-danger'>Оберіть один із параметрів.</strong>";
        }
        else {
            return '';
        }
    }
}