<?php

namespace classes;

class TitleValidate extends Validator
{
    public function validate(string $param) :bool
    {
        if(mb_strlen($param)<3 || mb_strlen($param)>255) {
            return  true;
        }
        else {
            return false;
        }
    }

    public function checkError(bool $setting) :string
    {
        if($setting) {
            return  "<strong class='text-danger'>Заголовок повинен бути не менше трьох та не більше 255 символів.</strong>";
        }
        else {
            return '';
        }
    }

}
