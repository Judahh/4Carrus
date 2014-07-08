<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shape
 *
 * @author Judah
 */
class BasicShape {

    private $stringShapeType;
    private $stringShapeValue;

    private function __construct($stringShapeType, $stringShapeValue) {
        $this->stringShapeType = $stringShapeType;
        $this->stringShapeValue = $stringShapeValue;
    }

    public static function BasicShapeWithStringShapeTypeWithStringShapeValue($stringShapeType, $stringShapeValue) {
        $instance = new self($stringShapeType, $stringShapeValue); //arrumar
        return $instance;
    }

    public function stringBasicShape() {
        return $this->stringShapeType . "(" . $this->stringShapeValue . ")";
    }

}
