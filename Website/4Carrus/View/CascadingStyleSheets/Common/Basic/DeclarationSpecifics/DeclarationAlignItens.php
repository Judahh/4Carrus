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
    class DeclarationAlignItens extends Declaration {

        //Constructor
        //   instantiation: 
        //      $declaration = DeclarationAlignItens::DeclarationAlignItensWithStringValue($stringValue);
        public static function DeclarationAlignItensWithStringValue($stringValue) {
            $instance = new parent("align-itens", ":" . $stringValue); //arrumar
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