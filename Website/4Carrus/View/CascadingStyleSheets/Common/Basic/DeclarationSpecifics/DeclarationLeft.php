<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationLeft
 *
 * @author Silvio
 */
class DeclarationLeft extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationLeft::DeclarationLeftStringValue($stringValue);
//      $declaration = DeclarationLeft::DeclarationLeftIntegerValue($integerValue);
        public static function DeclarationLeftWithStringValue($stringValue) {
            $instance = new parent("column-gap", $stringValue);
            return $instance;
        }

        public static function DeclarationLeftWithIntegerValue($integerValue) {
            $instance = new parent("column-gap", $integerValue);
            return $instance;
        }
                
     public static function stringValueAuto() {
        return "auto";
    }
}
