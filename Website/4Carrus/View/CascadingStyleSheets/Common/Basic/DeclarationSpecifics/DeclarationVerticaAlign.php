<?php

/**
 * DeclarationVerticaAlign [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
//Constructor
//   instantiation: 
//      $declaration = DeclarationVerticaAlign::DeclarationVerticaAlignWithStringValue($stringValue);
class DeclarationVerticaAlign extends Declaration {

    public static function DeclarationVerticaAlignWithStringValue($stringValue) {
        $instance = new parent("vertical-align", $stringValue);
        return $instance;
    }

    public static function DeclarationWordSpacingWithStringValue($stringValue) {
        $instance = new parent("vertical-align" . $stringValue);
        return $instance;
    }

    public static function DeclarationWordSpacingWithStringPercentValue($stringPercentValue) {
        $instance = new parent("vertical-align" . $stringValue . "%");
        return $instance;
    }

    public static function DeclarationWordSpacingPercentWithIntPercentValue($intPercentValue) {
        $instance = new parent("vertical-align" . $intPercentValue . "%");
        return $instance;
    }

    public static function DeclarationWordSpacingWithStringPixelValue($stringPixelValue) {
        $instance = new parent("vertical-align", ":" . $stringPixelValue . "px");
        return $instance;
    }

    public static function DeclarationWordSpacingWithIntPixelValue($intPixelValue) {
        $instance = new parent("vertical-align", ":" . $intPixelValue . "px");
        return $instance;
    }

    public static function DeclarationWordSpacingWithStringCentimeterValue($stringCentimeterValue) {
        $instance = new parent("vertical-align", ":" . $stringCentimeterValue . "cm");
        return $instance;
    }

    public static function DeclarationWordSpacingWithIntCentimeterValue($intCentimeterValue) {
        $instance = new parent("vertical-align", ":" . $intCentimeterValue . "cm");
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

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

}

?>