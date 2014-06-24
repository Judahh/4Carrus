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
class BoxShadowValue {

    private $arrayBoxShadowValue;

    private function __construct() {
        
    }

    public static function
    BoxShadowValueWithStringHorizontalShadowValueWithStringVerticalShadowValueWithStringBlurValueWithStringSpreadValueWithStringColorValueWithStringInsetValue
    ($stringHorizontalShadowValue, $stringVerticalShadowValue, $stringBlurValue, $stringSpreadValue, $stringColorValue, $stringInsetValue) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $stringHorizontalShadowValue);
        array_push($this->arrayBoxShadowValue, $stringVerticalShadowValue);
        array_push($this->arrayBoxShadowValue, $stringBlurValue);
        array_push($this->arrayBoxShadowValue, $stringSpreadValue);
        array_push($this->arrayBoxShadowValue, $stringColorValue);
        array_push($this->arrayBoxShadowValue, $stringInsetValue);
        return $instance;
    }

    public static function BoxShadowValueWithStringHorizontalShadowValueWithStringVerticalShadowValue($stringHorizontalShadowValue, $stringVerticalShadowValue) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $stringHorizontalShadowValue);
        array_push($this->arrayBoxShadowValue, $stringVerticalShadowValue);
        return $instance;
    }
    
    public static function BoxShadowValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayBoxShadowValue() {
        return $this->arrayBoxShadowValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBoxShadowValue, $stringValue);
    }

    public static function getArrayBoxShadowNameValue() {
        return AnimationNameValue::getInstance()->getArrayBoxShadowNameValue();
    }

}
