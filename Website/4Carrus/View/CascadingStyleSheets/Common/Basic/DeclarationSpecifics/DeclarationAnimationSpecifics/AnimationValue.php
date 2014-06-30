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
    AnimationWithStringKeyframesWithStringDurationWithStringTimingFunctionWithStringDelayWithStringIterationCountWithStringDirectionWithStringFillModeWithStringPlayState
    ($stringKeyframes, $stringDuration, $stringTimingFunction, $stringDelay, $stringIterationCount, $stringDirection, $stringFillMode, $stringPlayState) {
        $instance = new self();
        array_push($this->arrayAnimationValue, $stringKeyframes);
        array_push($this->arrayAnimationValue, $stringDuration);
        array_push($this->arrayAnimationValue, $stringTimingFunction);
        array_push($this->arrayAnimationValue, $stringDelay);
        array_push($this->arrayAnimationValue, $stringIterationCount);
        array_push($this->arrayAnimationValue, $stringDirection);
        array_push($this->arrayAnimationValue, $stringFillMode);
        array_push($this->arrayAnimationValue, $stringPlayState);
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
