<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicColor
 *
 * @author Judah
 */
class BasicColor {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicColorWithIntHexdecimalColor($intHexdecimalColor) {
        $instance = new self("#".$intHexdecimalColor);
        return $instance;
    }
    
    public static function BasicColorWithIntRedWithIntGreenWithIntBlue($intRed, $intGreen, $intBlue) {
        $instance = new self("rgb(".$intRed.",".$intGreen.",".$intBlue.")");
        return $instance;
    }
    
    public static function BasicColorWithStringValue($stringValue) {
        $instance = new self($stringValue);
        return $instance;
    }

    public function stringBasicColor() {
        return $this->stringValue;
    }
}
