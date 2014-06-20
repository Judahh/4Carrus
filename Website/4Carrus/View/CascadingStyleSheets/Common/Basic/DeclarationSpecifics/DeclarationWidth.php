<?php

/**
 * DeclarationWidth [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationWidth::DeclarationWidthWithStringValue($stringValue);
class DeclarationWidth extends Declaration {
    public static function DeclarationWidthWithStringValue($stringValue) {
        $instance = new parent("width", $stringValue);
        return $instance;
    }
    
    public static function DeclarationWidthWithFloatPercentValue($floatPercentValue) {
        $instance = new parent("width", $floatPercentValue."%");
        return $instance;
    }
    
    public static function DeclarationWidthWithFloatPixelValue($FloatPixelValue) {
        $instance = new parent("width", $FloatPixelValue."px");
        return $instance;
    }
    
    public static function DeclarationWidthWithFloatCentimeterValue($FloatCentimeterValue) {
        $instance = new parent("width", $FloatCentimeterValue."cm");
        return $instance;
    }
    
    public static function DeclarationWidthWithFloatPointValue($floatPointValue) {
        $instance = new parent("width", $floatPointValue."pt");
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueLength() {
        return "length";
    }
    
    public static function stringValueInitial() {
        return "initial";
    }
    
    public static function stringValueInherit() {
        return "Inherit";
    }
    
}

?>