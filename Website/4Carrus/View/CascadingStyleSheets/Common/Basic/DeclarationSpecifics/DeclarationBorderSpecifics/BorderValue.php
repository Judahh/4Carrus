<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationAnimationNameValue
 *
 * @author Judah
 */
class BorderValue {

    private $arrayBorderValue;

    private function __construct() {
        
    }

    
    
    public static function BorderValueWithStringBorderWidthWithStringBorderStyleWithStringBorderColor($stringborderWidth, $stringborderStyle, $stringborderColor) {
        $instance = new self();
        array_push($this->arrayBorderValue, $stringborderWidth);
        array_push($this->arrayBorderValue, $stringborderStyle);
        array_push($this->arrayBorderValue, $stringborderColor);
        return $instance;
    }

    public static function BorderValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderValue() {
        return $this->arrayBorderValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderValue, $stringValue);
    }

    public static function getArrayBorderNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderNameValue();
    }

}
