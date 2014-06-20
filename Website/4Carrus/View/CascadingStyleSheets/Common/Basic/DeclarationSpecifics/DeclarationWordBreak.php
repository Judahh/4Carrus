<?php

/**
 * DeclarationWordBreak [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
//Constructor
//   instantiation: 
//      $declaration = DeclarationWordBreak::DeclarationWordBreakWithStringValue($stringValue);
class DeclarationWordBreak extends Declaration{
    public static function DeclarationWordSpacingWithStringValue($stringValue) {
        $instance = new parent("word-break", ":" . $stringValue); //arrumar
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueBreakAll() {
        return "break-all";
    }

    public static function stringValueKeepAll() {
        return "keepAll";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

}

?>