<?php

/**
 * DeclarationVerticaAlign [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationVerticalAlign::DeclarationVerticalAlignWithStringValue($stringValue);
class DeclarationVerticalAlign extends Declaration {

    public static function DeclarationVerticalAlignWithStringValue($stringValue) {
        $instance = new parent("vertical-align", $stringValue);
        return $instance;
    }

    public static function DeclarationVerticalAlignPercentWithFloatPercentValue($FloatPercentValue) {
        $instance = new parent("vertical-align", $FloatPercentValue . "%");
        return $instance;
    }

    public static function DeclarationVerticalAlignWithFloatPixelValue($FloatPixelValue) {
        $instance = new parent("vertical-align", $FloatPixelValue . "px");
        return $instance;
    }

    public static function DeclarationVerticalAlignWithFloatCentimeterValue($FloatCentimeterValue) {
        $instance = new parent("vertical-align", $FloatCentimeterValue . "cm");
        return $instance;
    }

    public static function stringValueBaseline() {
        return "baseline";
    }

    public static function stringValueSub() {
        return "sub";
    }

    public static function stringValueSuper() {
        return "super";
    }

    public static function stringValuePreWrap() {
        return "top";
    }

    public static function stringValueTextTop() {
        return "text-top";
    }

    public static function stringValueMiddle() {
        return "middle";
    }

    public static function stringValueBottom() {
        return "botton";
    }

    public static function stringValueTextBottom() {
        return "text-botton";
    }

}

?>