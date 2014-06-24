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

}

?>