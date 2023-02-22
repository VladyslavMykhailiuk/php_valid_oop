<?php

namespace classes;

abstract class Validator
{
abstract protected function validate(string $param) :bool;
abstract protected function checkError(bool $setting) :string;
}