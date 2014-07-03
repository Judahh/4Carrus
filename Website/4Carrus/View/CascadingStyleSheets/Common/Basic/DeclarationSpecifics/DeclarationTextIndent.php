<?php

/**
 * DeclarationTextIndent [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTextIndent::DeclarationTextIndentWithStringValue($stringValue);
class DeclarationTextIndent extends Declaration{
    public static function DeclarationTextIndentWithStringValue($stringValue) {
        $instance = new parent("text-indent", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatPercentValue($floatPercentValue) {
        $instance = new parent("text-indent", $floatPercentValue."%");
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatPixelValue($floatPixelValue) {
        $instance = new parent("text-indent", $floatPixelValue."px");
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatCentimeterValue($floatCentimeterValue) {
        $instance = new parent("text-indent", $floatCentimeterValue."cm");
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatPointValue($floatPointValue) {
        $instance = new parent("text-indent", $floatPointValue."pt");
        return $instance;
    }
    
}
