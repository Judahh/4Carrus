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
class BasicTime {

    private $floatTime;
    private $stringUnity;

    private function __construct($floatTime, $stringUnity) {
        $this->floatTime = $floatTime;
        $this->stringUnity = $stringUnity;
    }

    public static function BasicTimeWithFloatLengthWithStringUnity($floatTime, $stringUnity) {
        $instance = new self($floatTime, $stringUnity); //arrumar
        return $instance;
    }
    
    public static function BasicTimeWithFloatTimeSecond($floatTimeSecond) {
        $instance = new self($floatTimeSecond, "s"); //arrumar
        return $instance;
    }
    
    public static function BasicTimeWithFloatTimeMilisecond($floatTimeMilisecond) {
        $instance = new self($floatTimeMilisecond, "ms"); //arrumar
        return $instance;
    }

    public function stringBasicTime() {
        return $this->floatTime.$this->stringUnity;
    }
}
