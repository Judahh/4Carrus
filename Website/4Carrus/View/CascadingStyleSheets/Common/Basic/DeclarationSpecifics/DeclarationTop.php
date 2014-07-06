<?php

/**
 * DeclarationTop [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTop::DeclarationTopWithStringValue($stringValue);
class DeclarationTop extends Declaration {
    public static function DeclarationTopWithStringValue($stringValue) {
        $instance = new parent("top", $stringValue);
        return $instance;
    }

    public static function DeclarationTopWithBasicLength($basicLength) {
        $instance = new parent("top", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

}

?>