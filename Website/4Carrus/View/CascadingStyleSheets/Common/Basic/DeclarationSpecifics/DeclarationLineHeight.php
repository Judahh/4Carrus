<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DeclarationLineHeight
 *
 * @author Silvio
 */
class DeclarationLineHeight extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationLineHeight::DeclarationLineHeightStringValue($stringValue);
//      $declaration = DeclarationLineHeight::DeclarationLineHeightIntegerValue($integerValue);
        public static function DeclarationLineHeightWithStringValue($stringValue) {
            $instance = new parent("line-height", $stringValue);
            return $instance;
        }

        // number
        public static function DeclarationLineHeightWithIntegerValue($integerValue) {
            $instance = new parent("line-height", $integerValue);
            return $instance;
        }
        
        // length        
        public static function DeclarationLineHeightWithBasicLineHeight($basicLineHeight){
            $instance = new parent("line-height", $basicLineHeight->stringBasicLineHeight());
            return $instance;           
        }

        // %
        public static function LineHeightWithIntPercentFontSize($intPercentFontSize) {
            $instance = new self($intPercentFontSize, "%");
            return $instance;
        }

        public static function stringValueNormal() {
            return "normal";
        }
   
   }
