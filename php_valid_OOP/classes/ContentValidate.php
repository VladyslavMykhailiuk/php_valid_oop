<?php

namespace classes;

class ContentValidate extends Validator
{

    public function validate(string $param) :string
    {
        if( mb_strlen($param)<100 || mb_strlen($param)>30000) {
            return "<strong class='text-danger'>Контент не повинен перевищувати 30000 символів та мати не менше ніж 100 символів.</strong>";
        }
        else {
            return '';
        }
    }
}