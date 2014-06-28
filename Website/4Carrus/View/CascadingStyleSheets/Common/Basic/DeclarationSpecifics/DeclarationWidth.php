<?php

/**
 * DeclarationWidth [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationWidth::DeclarationWidthWithStringValue($stringValue);
class DeclarationWidth extends Declaration {
    public static function DeclarationWidthWithStringValue($stringValue) {
        $instance = new parent("width", $stringValue);
        return $instance;
    }
    
    public static function DeclarationWidthWithBasicLength($basicLength) {
        $instance = new parent("width", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueLength() {
        return "length";
    }
    
}

?>