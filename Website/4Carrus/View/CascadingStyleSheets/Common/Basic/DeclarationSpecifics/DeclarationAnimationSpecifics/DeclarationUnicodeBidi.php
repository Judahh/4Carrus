<?php

/**
 * DeclarationUnicodeBidi [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationUnicodeBidi::DeclarationUnicodeBidiWithStringValue($stringValue);
class DeclarationUnicodeBidi extends Declaration{
    public static function DeclarationUnicodeBidiWithStringValue($stringValue) {
        $instance = new parent("unicode-bidi", $stringValue);
        return $instance;
    }
    
    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueEmbed() {
        return "embed";
    }
    
    public static function stringValueBidiOverride() {
        return "bidi-override";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }
    
}

?>