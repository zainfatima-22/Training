<?php

class Validator{
    public static function string($value, $min=1, $max=100){
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}