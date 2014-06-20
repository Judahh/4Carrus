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
        $instance = new parent("word-spacing" . $stringValue); //arrumar
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueLength() {
        return "length";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

}

?>