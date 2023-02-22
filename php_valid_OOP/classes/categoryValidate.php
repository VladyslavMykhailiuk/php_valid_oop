<?php

namespace classes;

class categoryValidate extends Validator
{

    public function validate(string $param) :string
    {
            if($param == '') {
                return "<strong class='text-danger'>Оберіть один із параметрів.</strong>";
            }
            else {
                return '';
            }
    }
}