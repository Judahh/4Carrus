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
        $instance = new self($floatLength, $stringUnity); //arrumar
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthCentimeter($floatLengthCentimeter) {
        $instance = new self($floatLengthCentimeter, "cm"); //arrumar
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPixel($floatLengthPixel) {
        $instance = new self($floatLengthPixel, "px"); //arrumar
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthPercent($floatLengthPercent) {
        $instance = new self($floatLengthPercent, "%"); //arrumar
        return $instance;
    }

    public function stringBasicLength() {
        return $floatLength.$stringUnity;
    }
}
