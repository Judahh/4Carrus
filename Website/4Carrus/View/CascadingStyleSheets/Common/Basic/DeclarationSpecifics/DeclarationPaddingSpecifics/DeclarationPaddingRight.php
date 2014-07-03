<?php

/**
 * DeclarationPaddingRight [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationPaddingRight extends DeclarationPadding{
    //Constructor
//   instantiation: 
//      $declaration = DeclarationPaddingRight::DeclarationPaddingRightWithStringValue($stringValue);
    public static function DeclarationPaddingRightWithStringValue($stringValue) {
        $instance = new parent("padding-right", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPaddingRightWithBasicFourPartsLength($basicFourPartsLength) {
        $instance = new parent("padding-right", $basicFourPartsLength->stringBasicFourPartsLength());
        return $instance;
    }
}

?>