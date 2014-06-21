<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */
class DeclarationBackgroundSize extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundSizeWithStringValue($stringValue) {
        $instance = new parent("background-position", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBackgroundSizeWithStringPositionXValue($stringPositionXValue) {
        $instance = new parent("background-position", $stringPositionXValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthXValue($basicLengthXValue) {
        $instance = new parent("background-position", $basicLengthXValue->stringBasicLength()); //arrumar
        return $instance;
    }
    
    
    public static function DeclarationBackgroundSizeWithStringPositionXValueWithStringPositionYValue($stringPositionXValue, $stringPositionYValue) {
        $instance = new parent("background-position", $stringPositionXValue." ".$stringPositionYValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthXValueWithBasicLengthYValue($basicLengthXValue, $basicLengthYValue) {
        $instance = new parent("background-position", $basicLengthXValue->stringBasicLength()." ".$basicLengthYValue->stringBasicLength()); //arrumar
        return $instance;
    }
    
    
    public static function DeclarationBackgroundSizeWithStringPositionXValueWithBasicLengthYValue($stringPositionXValue, $basicLengthYValue) {
        $instance = new parent("background-position", $stringPositionXValue." ".$basicLengthYValue->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthXValueWithStringPositionYValue($basicLengthXValue, $stringPositionYValue) {
        $instance = new parent("background-position", $basicLengthXValue->stringBasicLength()." ".$stringPositionYValue); //arrumar
        return $instance;
    }
    
    public static function stringAutoSizeValue() {
        return "auto";
    }
    
    public static function stringValueCover() {
        return "cover";
    }
    
    public static function stringValueContain() {
        return "contain";
    }
}

?>