<?php

/**
 * DeclarationPageBreakInside [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationPageBreakInside::DeclarationPageBreakInsideWithStringValue($stringValue);
class DeclarationPageBreakInside extends Declaration{
    public static function DeclarationPageBreakInsidetWithStringValue($stringValue) {
        $instance = new parent("page-break-inside", $stringValue);
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
    
    public static function stringValueAvoid() {
        return "avoid";
    }
}

?>