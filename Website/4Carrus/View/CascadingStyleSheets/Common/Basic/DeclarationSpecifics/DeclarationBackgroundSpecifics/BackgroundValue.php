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
class BackgroundValue {
    private $arrayBackgroundValue;
    
    private function __construct() {
        
    }

    public static function
    BackgroundValueWithStringAttachmentValueWithStringClipValueWithStringColorValueWithStringImageValueWithStringOriginValueWithStringPositionValueWithStringRepeatValueWithStringSizeValue
    ($stringAttachmentValue, $stringClipValue, $stringColorValue, $stringImageValue, $stringOriginValue, $stringPositionValue, $stringRepeatValue, $stringSizeValue) {
        $instance = new self();
        array_push($this->arrayBackgroundValue, $stringColorValue);
        array_push($this->arrayBackgroundValue, $stringPositionValue);
        array_push($this->arrayBackgroundValue, $stringSizeValue);
        array_push($this->arrayBackgroundValue, $stringRepeatValue);
        array_push($this->arrayBackgroundValue, $stringOriginValue);
        array_push($this->arrayBackgroundValue, $stringClipValue);
        array_push($this->arrayBackgroundValue, $stringAttachmentValue);
        array_push($this->arrayBackgroundValue, $stringImageValue);
        return $instance;
    }

    public static function AnimationValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayAnimationValue() {
        return $this->arrayBackgroundValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayBackgroundValue, $stringValue);
    }

    public static function getArrayAnimationNameValue() {
        return AnimationNameValue::getInstance()->getArrayAnimationNameValue();
    }

}
