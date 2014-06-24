<?php

/**
 * DeclarationTextShadow [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationTextShadow::DeclarationTextShadowWithStringValue($stringValue);
class DeclarationTextShadow extends Declaration{
    public static function DeclarationTextShadowWithStringValue($stringValue) {
        $instance = new parent("text-shadow", $stringValue);
        return $instance;
    }

    public static function stringValueHorizontalShadow() {
        return "h-shadow";
    }

    public static function stringValueVerticalShadow() {
        return "v-shadow";
    }

    public static function stringValueBlur() {
        return "blur";
    }

    public static function stringValueColor() {
        return "color";
    }
    
    public static function stringValueNone() {
        return "none";
    }

}
