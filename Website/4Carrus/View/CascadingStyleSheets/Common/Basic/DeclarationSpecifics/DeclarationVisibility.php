<?php

/**
 * DeclarationVisibility [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationVisibility::DeclarationVisibilityWithStringValue($stringValue);
class DeclarationVisibility {
    public static function DeclarationVisibilityWithStringValue($stringValue) {
        $instance = new parent("visibility", $stringValue);
        return $instance;
    }

    public static function stringValueVisible() {
        return "visible";
    }

    public static function stringValueHidden() {
        return "hidden";
    }
    
    public static function stringValueCollapse() {
        return "collapse";
    }

}

?>