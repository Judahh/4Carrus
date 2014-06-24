<?php

/**
 * DeclarationTabSize [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTabSize::DeclarationTabSizeWithStringValue($stringValue);
class DeclarationTabSize extends Declaration {
    
    public static function DeclarationTabSizeWithStringValue($stringValue) {
        $instance = new parent("tab-size", $stringValue);
        return $instance;
    }

    public static function stringValueNumber() {
        return "number";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }
}

?>