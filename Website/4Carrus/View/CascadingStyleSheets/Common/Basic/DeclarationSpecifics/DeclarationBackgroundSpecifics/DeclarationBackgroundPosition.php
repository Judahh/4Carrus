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

    public static function DeclarationBackgroundPositionWithBasicPositionX($basicPositionX) {
        $instance = new parent("background-position", $basicPositionX->stringBasicPosition()); //arrumar
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
    
    public static function DeclarationBackgroundPositionWithBasicPositionXWithBasicLengthY($basicPositionX, $basicLengthY) {
        $instance = new parent("background-position", $basicPositionX->stringBasicPosition()." ".$basicLengthY->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithBasicLengthXWithBasicPositionY($basicLengthX, $basicPositionY) {
        $instance = new parent("background-position", $basicLengthX->stringBasicLength()." ".$basicPositionY->stringBasicPosition()); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithBasicPositionXWithBasicPositionY($basicPositionX, $basicPositionY) {
        $instance = new parent("background-position", $basicPositionY->stringBasicPosition()." ".$basicPositionY->stringBasicPosition()); //arrumar
        return $instance;
    }
}

?>