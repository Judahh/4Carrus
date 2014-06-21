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
class AnimationValue {

    private $arrayAnimationValue;

    private function __construct() {
        
    }

    public static function
    AnimationValueWithStringKeyframeValueWithStringDurationValueWithStringTimingFunctionValueWithStringDelayValueWithStringIterationCountValueWithStringDirectionValueWithStringFillModeValueWithStringPlayStateValue
    ($stringKeyframeValue, $stringDurationValue, $stringTimingFunctionValue, $stringDelayValue, $stringIterationCountValue, $stringDirectionValue, $stringFillModeValue, $stringPlayStateValue) {
        $instance = new self();
        array_push($this->arrayAnimationValue, $stringKeyframeValue);
        array_push($this->arrayAnimationValue, $stringDurationValue);
        array_push($this->arrayAnimationValue, $stringTimingFunctionValue);
        array_push($this->arrayAnimationValue, $stringDelayValue);
        array_push($this->arrayAnimationValue, $stringIterationCountValue);
        array_push($this->arrayAnimationValue, $stringDirectionValue);
        array_push($this->arrayAnimationValue, $stringFillModeValue);
        array_push($this->arrayAnimationValue, $stringPlayStateValue);
        return $instance;
    }

    public static function AnimationValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayAnimationValue() {
        return $this->arrayAnimationValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayAnimationValue, $stringValue);
    }

    public static function getArrayAnimationNameValue() {
        return AnimationNameValue::getInstance()->getArrayAnimationNameValue();
    }

}
