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
    public static function DeclarationPaddingWithStringValue($stringValue) {
        $instance = new parent("padding", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPaddingWithBasicLength($basicLength) {
        $instance = new parent("padding", $basicLength->stringBasicLength());
        return $instance;
    }
    
}

?>