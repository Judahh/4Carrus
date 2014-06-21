<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationAnimationValue
 *
 * @author Judah
 */
class AnimationNameValue {

    private static $animationNameValueInstance = null;
    private $arrayAnimationNameValue;

    private function __construct() {
        array_push($this->arrayAnimationNameValue, "stringKeyframeValue");
        array_push($this->arrayAnimationNameValue, "stringDurationValue");
        array_push($this->arrayAnimationNameValue, "stringTimingFunctionValue");
        array_push($this->arrayAnimationNameValue, "stringDelayValue");
        array_push($this->arrayAnimationNameValue, "stringIterationCountValue");
        array_push($this->arrayAnimationNameValue, "stringDirectionValue");
        array_push($this->arrayAnimationNameValue, "stringFillModeValue");
        array_push($this->arrayAnimationNameValue, "stringPlayStateValue");
    }

    public static function getInstance() {
        if (self::$animationNameValueInstance == null) {
            self::$animationNameValueInstance = new self;
        }

        return self::$animationNameValueInstance;
    }

    public function getArrayAnimationNameValue() {
        return $this->arrayAnimationNameValue;
    }

}
