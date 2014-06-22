<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationColor
 *
 * @author Judah
 */
    class DeclarationBackfaceVisibility extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignSelf::DeclarationAlignSelfWithStringValue($stringValue);
        public static function DeclarationBackfaceVisibilityWithStringValue($stringValue) {
            $instance = new parent("align-self", $stringValue); //arrumar
            return $instance;
        }
        
        public static function stringValueVisible() {
            return "visible";
        }
        
        public static function stringValueHidden() {
            return "hidden";
        }
    }

?>