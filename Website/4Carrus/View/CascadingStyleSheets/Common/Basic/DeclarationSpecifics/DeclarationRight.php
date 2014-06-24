<?php

/**
 * DeclarationRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTabSize::DeclarationTabSizeWithStringValue($stringValue);
class DeclarationRight extends DeclarationRight{
    public static function DeclarationRightWithStringValue($stringValue) {
        $instance = new parent("right", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatPercentValue($floatPercentValue) {
        $instance = new parent("text-inden", $floatPercentValue."%");
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatPixelValue($floatPixelValue) {
        $instance = new parent("text-inden", $floatPixelValue."px");
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatCentimeterValue($floatCentimeterValue) {
        $instance = new parent("text-inden", $floatCentimeterValue."cm");
        return $instance;
    }
    
    public static function DeclarationTextIndentWithFloatPointValue($floatPointValue) {
        $instance = new parent("text-inden", $floatPointValue."pt");
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }
}

?>