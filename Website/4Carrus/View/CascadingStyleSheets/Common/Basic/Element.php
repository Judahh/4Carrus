<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Element
 *
 * @author Judah
 */
class Element {
    private $arraySelector;
    
    private function __construct($arraySelector) {
        $this->$arraySelector = $arraySelector;
    }
    
    public static function SelectorWithArraySelector($arraySelector) {
        $instance = new self($arraySelector);
        return $instance;
    }
    
    public static function Selector() {
        $instance = new self(array());
        return $instance;
    }
}
