<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicLineHeight
 *
 * @author Silvio
 */
class BasicLineHeight {

    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicLineHeightWithIntLength($intLength) {
//        $stringValue;
        switch ($intLength) {
            case 1:
                $stringValue = "1";
            break;

            case 2:
                $stringValue = "2";
            break;

            case 10:
                $stringValue = "10";
            break;

            case 25:
                $stringValue = "25";
            break;
        
            default:
                $stringValue = "0";
            break;
        }
        $instance = new self($stringValue);
        return $instance;
    }

    public function stringBasicLineHeight() {
        return $this->stringValue;
    }
}
