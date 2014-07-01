<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicLength
 *
 * @author Judah
 */
class BasicLength {

    private $floatLength;
    private $stringUnity;

    private function __construct($floatLength, $stringUnity) {
        $this->floatLength = $floatLength;
        $this->stringUnity = $stringUnity;
    }

    public static function BasicLengthWithFloatLengthWithStringUnity($floatLength, $stringUnity) {
        $instance = new self($floatLength, $stringUnity);
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthMillimeter($floatLengthMillimeter) {
        $instance = new self($floatLengthMillimeter, "mm");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthCentimeter($floatLengthCentimeter) {
        $instance = new self($floatLengthCentimeter, "cm");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthInch($floatLengthInch) {
        $instance = new self($floatLengthInch, "in");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthFontXHeight($floatLengthFontXHeight) {
        $instance = new self($floatLengthFontXHeight, "ex");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthFontSize($floatLengthFontSize) {
        $instance = new self($floatLengthFontSize, "em");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPoint($floatLengthPoint) {
        $instance = new self($floatLengthPoint, "pt");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPica($floatLengthPica) {
        $instance = new self($floatLengthPica, "pc");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPixel($floatLengthPixel) {
        $instance = new self($floatLengthPixel, "px");
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPercent($floatLengthPercent) {
        $instance = new self($floatLengthPercent, "%");
        return $instance;
    }

    public function stringBasicLength() {
        return $this->floatLength.$this->stringUnity;
    }
}
