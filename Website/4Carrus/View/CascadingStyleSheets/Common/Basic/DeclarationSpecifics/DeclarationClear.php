<?php

/**
 * DeclarationClear [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationClear extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationNavDown::DeclarationNavDownStringValue($stringValue);
        public static function DeclarationClearWithStringValue($stringValue) {
            $instance = new parent("clear", $stringValue);
            return $instance;
        }
        
        public static function stringValueNone() {
            return "none";
        }
        
        public static function stringValueLeft() {
            return "left";
        }
        
        public static function stringValueTargetRight() {
            return "target-name";
        }
        
        public static function stringValueTargetboth() {
            return "target-name";
        }
        
}

?>