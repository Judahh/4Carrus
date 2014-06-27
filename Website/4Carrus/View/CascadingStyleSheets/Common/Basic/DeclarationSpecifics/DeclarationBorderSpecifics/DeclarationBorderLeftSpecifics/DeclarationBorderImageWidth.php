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
class DeclarationBorderLeftWidth extends DeclarationBorderLeft {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderLeftWidthWithStringValue($stringValue) {
        $instance = new parent("border-left-width", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderLeftWidthWithBasicLength($basicLength) {
        $instance = new parent("border-left-width", $basicLength->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }

}

?>