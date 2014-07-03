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
    BoxShadowWithStringHorizontalShadowWithStringVerticalShadowWithStringBlurWithStringSpreadWithStringColorWithStringInset
    ($stringHorizontalShadow, $stringVerticalShadow, $stringBlur, $stringSpread, $stringColor, $stringInset) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $stringHorizontalShadow);
        array_push($this->arrayBoxShadowValue, $stringVerticalShadow);
        array_push($this->arrayBoxShadowValue, $stringBlur);
        array_push($this->arrayBoxShadowValue, $stringSpread);
        array_push($this->arrayBoxShadowValue, $stringColor);
        array_push($this->arrayBoxShadowValue, $stringInset);
        return $instance;
    }

    public static function BoxShadowWithStringHorizontalShadowWithStringVerticalShadow($stringHorizontalShadow, $stringVerticalShadow) {
        $instance = new self();
        array_push($this->arrayBoxShadowValue, $stringHorizontalShadow);
        array_push($this->arrayBoxShadowValue, $stringVerticalShadow);
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
