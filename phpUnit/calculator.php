<?php

class Calculator {
    
    private static $mPlus = [];
    private static $mMinus = [];
    
    public static function mPlus($mPlus) {
        array_push(self::$mPlus, $mPlus);
    }
    
    public static function mMinus($mMinus) {
        array_push(self::$mMinus, $mMinus);
    }
    
    
    public static function add($val1 , $val2){
        return $val1 + $val2;
    }

    public static function subtract($val1 , $val2){
        return $val1 - $val2;
    }

    public static function multiply ($val1 , $val2){
        return $val1 * $val2;
    }

    public static function divide ($val1 , $val2) {
        if($val2 == 0) {
            throw new Exception("zero division");
        }
        return $val1 / $val2;
    }
    
    public static function sqrt($val1){
        if($val1 < 0) {
            throw new Exception("sqrt negative value");
        }
        return sqrt($val1); 
    }
    
    public static function percent ($val1, $val2) {
        return $val1 * $val2 / 100;
    }
    
    public static function mr() {
        return array_sum(self::$mPlus) - array_sum(self::$mMinus);
    } 
}
