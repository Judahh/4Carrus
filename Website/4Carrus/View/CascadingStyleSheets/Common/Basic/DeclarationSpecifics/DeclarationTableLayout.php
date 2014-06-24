<?php

/**
 * DeclarationTableLayout [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTableLayout::DeclarationTableLayoutWithStringValue($stringValue);
class DeclarationTableLayout extends Declaration {

    public static function DeclarationTableLayoutWithStringValue($stringValue) {
        $instance = new parent("table-layout", $stringValue);
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueFixed() {
        return "fixed";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

}

?>