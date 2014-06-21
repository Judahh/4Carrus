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
class DeclarationBackgroundColor extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundColorWithStringValue($stringValue) {
        $instance = new parent("background-color", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBackgroundColorWithStringHexColorValue($intHexColorValue) {
        $instance = new parent("background-color", "#" . $intHexColorValue); //arrumar
        return $instance;
    }

}

?>