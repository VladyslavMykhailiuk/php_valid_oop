<?php

namespace classes;

class AnnotationValidate extends Validator
{

    public function validate(string $param) :string
    {
        if( mb_strlen($param)<30 ||mb_strlen($param)>500) {
            return "<strong class='text-danger'>Анотація не повинна перевищувати 500 символів та мати менше ніж 30 символів.</strong>";

        }
        else {
            return '';
        }
    }
}