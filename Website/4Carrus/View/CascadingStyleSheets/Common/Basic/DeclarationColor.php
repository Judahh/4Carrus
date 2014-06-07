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
    class DeclarationColor extends Declaration{
           //Constructor
           //   instantiation: 
           //      $declaration = DeclarationColor::DeclarationWithStringPropertyWithStringValue($stringValue);
           public static function DeclarationWithStringPropertyWithStringValue($stringValue) {
              $instance = new super("color", ":".$stringValue);//arrumar
              return $instance;
           }
    }
?>