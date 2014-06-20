<?php

/**
 * DeclarationTop [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTop::DeclarationTopWithStringValue($stringValue);
class DeclarationTop extends Declaration {

    public static function DeclarationTopWithStringValue($stringValue) {
        $instance = new parent("top", $stringValue);
        return $instance;
    }

    public static function DeclarationVerticaAlignPercentWithFloatPercentValue($FloatPercentValue) {
        $instance = new parent("top", $FloatPercentValue . "%");
        return $instance;
    }

    public static function DeclarationVerticaAlignWithFloatPixelValue($FloatPixelValue) {
        $instance = new parent("top", $FloatPixelValue . "px");
        return $instance;
    }

    public static function DeclarationVerticaAlignWithFloatCentimeterValue($FloatCentimeterValue) {
        $instance = new parent("top", $FloatCentimeterValue . "cm");
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