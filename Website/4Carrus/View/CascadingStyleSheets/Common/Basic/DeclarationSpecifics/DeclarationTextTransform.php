<?php

/**
 * DeclarationUnicodeBidi [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTextTransform::DeclarationTextTransformWithStringValue($stringValue);
class DeclarationTextTransform extends Declaration {

    public static function DeclarationTextTransformWithStringValue($stringValue) {
        $instance = new parent("text-transform", $stringValue);
        return $instance;
    }

    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueCapitalize() {
        return "capitalize";
    }

    public static function stringValueUppercase() {
        return "uppercase";
    }

    public static function stringValueLowercase() {
        return "lowercase";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

}
