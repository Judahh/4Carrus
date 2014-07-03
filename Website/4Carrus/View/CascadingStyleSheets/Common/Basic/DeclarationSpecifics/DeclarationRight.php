<?php

/**
 * DeclarationRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTabSize::DeclarationTabSizeWithStringValue($stringValue);
class DeclarationRight extends Declaration{
    public static function DeclarationRightWithStringValue($stringValue) {
        $instance = new parent("right", $stringValue);
        return $instance;
    }
    
    public static function DeclarationRightWithFloatPercentValue($floatPercentValue) {
        $instance = new parent("right", $floatPercentValue."%");
        return $instance;
    }
    
    public static function DeclarationRightWithFloatPixelValue($floatPixelValue) {
        $instance = new parent("right", $floatPixelValue."px");
        return $instance;
    }
    
    public static function DeclarationRightWithFloatCentimeterValue($floatCentimeterValue) {
        $instance = new parent("right", $floatCentimeterValue."cm");
        return $instance;
    }
    
    public static function DeclarationRightWithFloatPointValue($floatPointValue) {
        $instance = new parent("right", $floatPointValue."pt");
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }
}

?>