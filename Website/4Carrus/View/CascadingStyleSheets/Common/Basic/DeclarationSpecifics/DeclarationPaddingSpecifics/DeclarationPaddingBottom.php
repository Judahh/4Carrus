<?php

/**
 * DeclarationPaddingBottom [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationPaddingBottom extends DeclarationPadding{
//Constructor
//   instantiation: 
//      $declaration = DeclarationPaddingBottom::DeclarationPaddingBottomWithStringValue($stringValue);
    public static function DeclarationPaddingBottomWithStringValue($stringValue) {
        $instance = new parent("padding-bottom", $stringValue);
        return $instance;
    }
}

?>