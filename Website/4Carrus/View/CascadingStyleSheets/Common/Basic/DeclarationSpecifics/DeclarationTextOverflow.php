<?php

/**
 * DeclarationTextOverflow [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTextOverflow::DeclarationTextOverflowWithStringValue($stringValue);
class DeclarationTextOverflow extends Declaration{
    public static function DeclarationTextOverflowWithStringValue($stringValue) {
        $instance = new parent("text-overflow", $stringValue);
        return $instance;
    }

    public static function stringValueClip() {
        return "clip";
    }

    public static function stringValueEllipsis() {
        return "ellipsis";
    }

    public static function stringValueString() {
        return "string";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }
}
