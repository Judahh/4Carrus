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
class DeclarationBorderBottomWidth extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderBottomWidthWithStringValue($stringValue) {
        $instance = new parent("border-bottom-width", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderBottomWidthWithBasicLength($basicLength) {
        $instance = new parent("border-bottom-width", $basicLength->stringBasicLength()); //arrumar
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