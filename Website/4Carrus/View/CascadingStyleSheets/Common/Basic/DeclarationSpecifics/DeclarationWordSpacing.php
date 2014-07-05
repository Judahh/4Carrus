<?php

/**
 * WordSpacing [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationWordSpacing::DeclarationWordSpacingWithStringValue($stringValue);
class DeclarationWordSpacing extends Declaration {
    public static function DeclarationWordSpacingWithStringValue($stringValue) {
        $instance = new parent("word-spacing", $stringValue);
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }

    public static function DeclarationWordSpacingWithBasicLength($basicLength) {
        $instance = new parent("padding-top", $basicLength->stringBasicLength());
        return $instance;
    }

}

?>