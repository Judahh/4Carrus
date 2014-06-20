<?php

/**
 * DeclarationZIndex [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationZIndex::DeclarationZIndexWithStringValue($stringValue);
class DeclarationZIndex extends Declaration {
    public static function DeclarationZIndexWithStringValue($stringValue) {
        $instance = new parent("z-index" . $stringValue);
        return $instance;
    }

    public static function stringValueAuto() {
        return "auto";
    }

    public static function stringValueNumber() {
        return "number";
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "Inherit";
    }

}

?>