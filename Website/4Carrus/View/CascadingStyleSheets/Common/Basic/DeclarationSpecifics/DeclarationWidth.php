<?php

/**
 * DeclarationWidth [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationWidth extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationWidth::DeclarationWidthWithStringValue($stringValue);
    public static function DeclarationWidthWithStringValue($stringValue) {
        $instance = new parent("width", $stringValue);
        return $instance;
    }
    
    public static function DeclarationWidthWithSimpleLength($basicSimpleLength) {
        $instance = new parent("width", $basicSimpleLength->stringBasicSimpleLength());
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