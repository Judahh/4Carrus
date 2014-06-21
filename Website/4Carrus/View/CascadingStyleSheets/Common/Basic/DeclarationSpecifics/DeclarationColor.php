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
class DeclarationColor extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationColorWithStringValue($stringValue) {
        $instance = new parent("color", $stringValue);
        return $instance;
    }

    public static function DeclarationColorWithIntHexColorValue($intHexColorValue) {
        $instance = new parent("color", "#" . $intHexColorValue);
        return $instance;
    }

    //todo constructo with int
}

?>