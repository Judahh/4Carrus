<?php

/**
 * BasicTranslate [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicTranslate {
    private $lengthHorizontal;
    private $lengthVertical;

    private function __construct($lengthHorizontal, $lengthVertical) {
        $this->$lengthHorizontal = $lengthHorizontal;
        $this->$lengthVertical = $lengthVertical;
    }
    
    public static function BasicTranslatehWithFloatLengthWithStringUnity($lengthHorizontal, $lengthVertical) {
        $instance = new self($lengthHorizontal,",", $lengthVertical);
        return $instance;
    }
    
    public static function BasicLengthWithFloatLengthMillimeter($lengthHorizontal, $lengthVertical) {
        $instance = new parent($lengthHorizontal->stringBasicLength().",".$lengthVertical->stringBasicLength());
        return $instance;
    }
    
    public function stringBasicTranslate() {
        return $this->stringBasicTranslate;
    }
}

?>