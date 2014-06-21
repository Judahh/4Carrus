<?php

/**
 * DeclarationTextDecorationColor [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTextDecorationColor::DeclarationTextDecorationColorWithStringValue($stringValue);
class DeclarationTextDecorationColor extends Declaration{
    public static function DeclarationTextDecorationColorWithStringValue($stringValue) {
        $instance = new parent("text-decoration-color", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTextDecorationColorWithStringColorValue($stringValue) {
        $instance = new parent("text-decoration-color", $stringValue);
        return $instance;
    }

    public static function DeclarationTextDecorationColorWithIntHexColorValue($intHexColorValue) {
        $instance = new parent("text-decoration-color", "#" . $intHexColorValue);
        return $instance;
    }
    
     public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }
}

?>