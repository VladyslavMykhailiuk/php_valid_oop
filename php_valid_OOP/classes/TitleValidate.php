<?php

namespace classes;

class TitleValidate extends Validator
{

    public function validate(string $param) :string
    {
        if(mb_strlen($param)<3 || mb_strlen($param)>255) {
            return  "<strong class='text-danger'>Заголовок повинен бути не менше трьох та не більше 255 символів.</strong>";
        }
        else {
            return '';
        }
    }
}
