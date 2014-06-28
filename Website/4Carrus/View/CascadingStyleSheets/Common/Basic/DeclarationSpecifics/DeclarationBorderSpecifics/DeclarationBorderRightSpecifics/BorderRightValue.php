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
class BorderRightValue {

    private $arrayBorderRightValue;

    private function __construct() {
        
    }

    public static function
    BorderRightValueWithStringBorderRightWidthWithStringBorderRightStyleWithStringBorderRightColor
    ($stringBorderRightWidth, $stringBorderRightStyle, $stringBorderRightColor) {
        $instance = new self();
        array_push($this->arrayBorderRightValue, $stringBorderRightWidth);
        array_push($this->arrayBorderRightValue, $stringBorderRightStyle);
        array_push($this->arrayBorderRightValue, $stringBorderRightColor);
        return $instance;
    }

    public static function BorderRightValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderRightValue() {
        return $this->arrayBorderRightValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderRightValue, $stringValue);
    }

    public static function getArrayBorderRightNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderRightNameValue();
    }

}
