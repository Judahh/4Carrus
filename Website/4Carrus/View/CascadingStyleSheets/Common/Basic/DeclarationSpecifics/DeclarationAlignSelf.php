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
    class DeclarationAlignSelf extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignSelf::DeclarationAlignSelfWithStringValue($stringValue);
        public static function DeclarationAlignSelfWithStringValue($stringValue) {
            $instance = new parent("align-self", ":" . $stringValue); //arrumar
            return $instance;
        }
        
        public function stringValueAuto() {
            return "auto";
        }
        
        public function stringValueStretch() {
            return "stretch";
        }
        
        public function stringValueCenter() {
            return "center";
        }
        
        public function stringValueFlexStart() {
            return "flex-start";
        }
        
        public function stringValueFlexEnd() {
            return "flex-end";
        }
        
        public function stringValueBaseline() {
            return "baseline";
        }
        
        public function stringValueInitial() {
            return "initial";
        }
        
        public function stringValueInherit() {
            return "inherit";
        }
        
    }

?>