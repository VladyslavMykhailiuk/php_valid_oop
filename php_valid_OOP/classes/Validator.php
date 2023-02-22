<?php

namespace classes;

abstract class Validator
{
abstract protected function validate(string $param) :string;
}