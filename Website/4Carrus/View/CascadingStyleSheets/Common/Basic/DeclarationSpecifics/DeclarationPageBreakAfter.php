<?php

/**
 * DeclarationPageBreakAfter [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationPageBreakAfter::DeclarationPageBreakAfterWithStringValue($stringValue);
class DeclarationPageBreakAfter extends Declaration{
    public static function DeclarationPageBreakAfterWithStringValue($stringValue) {
        $instance = new parent("page-break-after", $stringValue);
        return $instance;
    }
    
    public static function stringValueAuto() {
        return "auto";
    }
    
    public static function stringValueAlways() {
        return "always";
    }
    
    public static function stringValueAvoid() {
        return "avoid";
    }

    public static function stringValueLeft() {
        return "left";
    }
    public static function stringValueRight() {
        return "right";
    }
    
}

?>