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
    public static function DeclarationWordBreakWithStringValue($stringValue) {
        $instance = new parent("word-break", $stringValue);
        return $instance;
    }

    public static function stringValueNormal() {
        return "normal";
    }

    public static function stringValueBreakAll() {
        return "break-all";
    }

    public static function stringValueKeepAll() {
        return "keep-all";
    }

}

?>