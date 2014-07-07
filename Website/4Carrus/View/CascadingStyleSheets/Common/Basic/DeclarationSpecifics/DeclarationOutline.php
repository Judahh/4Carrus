<?php

/**
 * DeclarationOutline [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationOutline extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationOutline::DeclarationOutlineWithStringValue($stringValue);
    public static function DeclarationOutlineWithStringValue($stringValue) {
        $instance = new parent("outline", $stringValue);
        return $instance;
    }
}

?>