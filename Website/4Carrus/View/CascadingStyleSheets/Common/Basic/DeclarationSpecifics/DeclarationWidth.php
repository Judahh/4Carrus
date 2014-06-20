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

    public static function DeclarationWordSpacingWithStringValue($stringValue) {
        $instance = new parent("word-break". $stringValue);
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithStringPercentValue($stringPercentValue) {
        $instance = new parent("word-break". $stringValue."%");
        return $instance;
    }
    
    public static function DeclarationWordSpacingPercentWithIntPercentValue($intPercentValue) {
        $instance = new parent("word-break". $intPercentValue."%");
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithStringPixelValue($stringPixelValue) {
        $instance = new parent("word-break". $stringPixelValue."px");
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithIntPixelValue($intPixelValue) {
        $instance = new parent("word-break". $intPixelValue."px");
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithStringCentimeterValue($stringCentimeterValue) {
        $instance = new parent("word-break". $stringCentimeterValue."cm");
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithIntCentimeterValue($intCentimeterValue) {
        $instance = new parent("word-break". $intCentimeterValue."cm");
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