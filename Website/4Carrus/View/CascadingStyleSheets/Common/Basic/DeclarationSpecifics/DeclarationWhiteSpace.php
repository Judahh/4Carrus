<?php

/**
 * DeclarationWhiteSpace [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationWhiteSpace::DeclarationWhiteSpaceWithStringValue($stringValue);
class DeclarationWhiteSpace extends Declaration {
    public static function DeclarationWhiteSpaceWithStringValue($stringValue) {
        $instance = new parent("white-space", $stringValue);
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueNowrap() {
        return "nowrap";
    }

    public static function stringValuePre() {
        return "pre";
    }

    public static function stringValuePreLine() {
        return "pre-line";
    }

    public static function stringValuePreWrap() {
        return "pre-wrap";
    }

}

?>