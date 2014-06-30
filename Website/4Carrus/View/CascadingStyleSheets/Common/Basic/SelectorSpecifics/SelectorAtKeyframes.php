<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SelectorColor
 *
 * @author Judah
 */

class SelectorAtKeyframes extends Selector {
    
    private $arraySelector;
//Constructor
//   instantiation: 
//      $declaration = SelectorAtKeyframes::SelectorAtKeyframesWithStringValue($stringValue);
        public static function SelectorAtKeyframesWithStringKeyframes($stringKeyframes) {
            $instance = new parent("keyframes"." ".$stringKeyframes, "@", "");
            return $instance;
        }
        
    }

?>