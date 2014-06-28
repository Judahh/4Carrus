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
class DeclarationBorderRightWidth extends DeclarationBorderRight {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderColor::DeclarationBorderColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderRightWidthWithStringValue($stringValue) {
        $instance = new parent("border-right-width", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderRightWidthWithBasicLength($basicLength) {
        $instance = new parent("border-right-width", $basicLength->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function stringValueMedium() {
        return "medium";
    }
    
    public static function stringValueThin() {
        return "thin";
    }
    
    public static function stringValueThick() {
        return "thick";
    }
}

?>