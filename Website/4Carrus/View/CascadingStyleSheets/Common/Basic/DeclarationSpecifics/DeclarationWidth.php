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
        $instance = new parent("word-break", ":" . $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithStringPercentValue($stringPercentValue) {
        $instance = new parent("word-break", ":" . $stringValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationWordSpacingPercentWithIntPercentValue($intPercentValue) {
        $instance = new parent("word-break", ":" . $intPercentValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithStringPixelValue($stringPixelValue) {
        $instance = new parent("word-break", ":" . $stringPixelValue."px"); //arrumar
        return $instance;
    }
    
    public static function DeclarationWordSpacingWithIntPixelValue($intPixelValue) {
        $instance = new parent("word-break", ":" . $intPixelValue."%"); //arrumar
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