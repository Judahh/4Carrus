<?php

/**
 * DeclarationResize [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationResize::DeclarationResizeWithStringValue($stringValue);
class DeclarationResize extends Declaration{
    public static function DeclarationResizeWithStringValue($stringValue) {
        $instance = new parent("resize", $stringValue);
        return $instance;
    }
    
    public static function stringValueNone() {
        return "none";
    }

    public static function stringValueBoth() {
        return "both";
    }
    
    public static function stringValueHorizontal() {
        return "horizontal";
    }
    
    public static function stringValueVertical() {
        return "vertical";
    }
}

?>