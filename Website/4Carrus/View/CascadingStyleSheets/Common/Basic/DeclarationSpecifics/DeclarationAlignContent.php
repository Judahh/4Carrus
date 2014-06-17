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
    class DeclarationAlignContent extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignContent::DeclarationAlignContentWithStringValue($stringValue);
        public static function DeclarationAlignContentWithStringValue($stringValue) {
            $instance = new parent("align-content", ":" . $stringValue); //arrumar
            return $instance;
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
        
        public function stringValueSpaceBetween() {
            return "space-between";
        }
        
        public function stringValueSpaceAround() {
            return "space-around";
        }
        
        public function stringValueInitial() {
            return "initial";
        }
        
        public function stringValueInherit() {
            return "inherit";
        }
        
    }

?>