<?php

/**
 * DeclarationPadding [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationPadding extends Declaration{
    //Constructor
//   instantiation: 
//      $declaration = DeclarationPadding::DeclarationPaddingWithStringValue($stringValue);
    public static function DeclarationWidthWithStringValue($stringValue) {
        $instance = new parent("padding", $stringValue);
        return $instance;
    }
    
    public static function DeclarationWidthWithBasicLength($basicLength) {
        $instance = new parent("padding", $basicLength->stringBasicLength());
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueLength() {
        return "length";
    }
}

?>