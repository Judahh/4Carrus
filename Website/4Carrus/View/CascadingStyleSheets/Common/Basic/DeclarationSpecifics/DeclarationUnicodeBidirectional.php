<?php

/**
 * DeclarationUnicodeBidi [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationUnicodeBidirectional::DeclarationUnicodeBidirectionalWithStringValue($stringValue);
class DeclarationUnicodeBidirectional extends Declaration{
    public static function DeclarationUnicodeBidirectionalWithStringValue($stringValue) {
        $instance = new parent("unicode-bidi", $stringValue);
        return $instance;
    }
    
    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueEmbed() {
        return "embed";
    }
    
    public static function stringValueBidirectionalOverride() {
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