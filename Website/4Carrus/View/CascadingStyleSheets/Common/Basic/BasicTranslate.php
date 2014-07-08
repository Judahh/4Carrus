<?php

/**
 * BasicTranslate [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicTranslate {

    private $stringShapeType;
    private $stringShapeValue;

    private function __construct($stringShapeType, $stringShapeValue) {
        $this->stringShapeType = $stringShapeType;
        $this->stringShapeValue = $stringShapeValue;
    }

    public static function BasicTranslateWithStringShapeTypeWithStringShapeValue($stringShapeType, $stringShapeValue) {
        $instance = new self($stringShapeType, $stringShapeValue);
        return $instance;
    }

    public function stringBasicShape() {
        return $this->stringShapeType . "(" . $this->stringShapeValue . ")";
    }
    
}

?>