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
class DeclarationBackgroundPosition extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundPositionWithStringValue($stringValue) {
        $instance = new parent("background-position", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBackgroundPositionWithStringXPositionValue($stringXPositionValue) {
        $instance = new parent("background-position", $stringXPositionValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithBasicLengthX($basicLengthX) {
        $instance = new parent("background-position", $basicLengthX->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithBasicLengthXWithBasicLengthY($basicLengthX, $basicLengthY) {
        $instance = new parent("background-position", $basicLengthX->stringBasicLength()." ".$basicLengthY->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithStringXPositionValueWithBasicLengthY($stringXPositionValue, $basicLengthY) {
        $instance = new parent("background-position", $stringXPositionValue." ".$basicLengthY->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithBasicLengthXWithStringYPositionValue($basicLengthX, $stringYPositionValue) {
        $instance = new parent("background-position", $basicLengthX->stringBasicLength()." ".$stringYPositionValue); //arrumar
        return $instance;
    }
    
    public static function stringPositionTopValue() {
        return "top";
    }
    
    public static function stringPositionCenterValue() {
        return "center";
    }
    
    public static function stringPositionBottomValue() {
        return "bottom";
    }
    
    public static function stringPositionLeftValue() {
        return "left";
    }
    
    public static function stringPositionRightValue() {
        return "right";
    }
}

?>