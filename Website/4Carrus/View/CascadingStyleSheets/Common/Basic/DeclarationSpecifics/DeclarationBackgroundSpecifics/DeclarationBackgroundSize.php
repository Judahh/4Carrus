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
        $instance = new parent("background-size", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthX($basicLengthX) {
        $instance = new parent("background-size", $basicLengthX->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundSizeWithBasicLengthXWithBasicLengthY($basicLengthX, $basicLengthY) {
        $instance = new parent("background-size", $basicLengthX->stringBasicLength()." ".$basicLengthY->stringBasicLength()); //arrumar
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