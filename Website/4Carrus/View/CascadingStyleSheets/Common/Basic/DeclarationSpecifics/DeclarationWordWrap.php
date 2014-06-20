<?php

/**
 * DeclarationWordWrap [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationWordWrap::DeclarationWordWrapWithStringValue($stringValue);
class DeclarationWordWrap {
    public static function DeclarationAlignItensWithStringValue($stringValue) {
        $instance = new parent("word-wrap", $stringValue);
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueBreakWord() {
        return "break-word";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

}

?>