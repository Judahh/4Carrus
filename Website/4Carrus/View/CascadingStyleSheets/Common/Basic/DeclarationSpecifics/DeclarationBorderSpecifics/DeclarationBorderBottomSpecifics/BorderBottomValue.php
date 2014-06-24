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
class BorderBottomValue {

    private $arrayBorderBottomValue;

    private function __construct() {
        
    }

    
    
    public static function BorderBottomValueWithStringBorderBottomWidthWithStringBorderBottomStyleWithStringBorderBottomColor($stringBorderBottomWidth, $stringBorderBottomStyle, $stringBorderBottomColor) {
        $instance = new self();
        array_push($this->arrayBorderBottomValue, $stringBorderBottomWidth);
        array_push($this->arrayBorderBottomValue, $stringBorderBottomStyle);
        array_push($this->arrayBorderBottomValue, $stringBorderBottomColor);
        return $instance;
    }

    public static function BorderBottomValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBorderBottomValue() {
        return $this->arrayBorderBottomValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBorderBottomValue, $stringValue);
    }

    public static function getArrayBorderBottomNameValue() {
        return AnimationNameValue::getInstance()->getArrayBorderBottomNameValue();
    }

}
