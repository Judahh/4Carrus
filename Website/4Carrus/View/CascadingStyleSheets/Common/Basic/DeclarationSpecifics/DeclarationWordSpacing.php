<?php

/**
 * WordSpacing [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationWordSpacing extends Declaration {
//Constructor
//   instantiation: 
//      $declaration = DeclarationWordSpacing::DeclarationWordSpacingWithStringValue($stringValue);
    public static function DeclarationWordSpacingWithStringValue($stringValue) {
        $instance = new parent("word-spacing", $stringValue);
        return $instance;
    }

    public static function DeclarationWordSpacingWithBasicLength($basicLength) {
        $instance = new parent("word-spacing", $basicLength->stringBasicLength());
        return $instance;
    }
    
    public static function stringValueNormal() {
        return "normal";
    }

}

?>