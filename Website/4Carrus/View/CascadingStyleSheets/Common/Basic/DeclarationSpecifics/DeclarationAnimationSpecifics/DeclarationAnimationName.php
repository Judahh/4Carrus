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
class DeclarationAnimationName extends DeclarationAnimation {
    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationNameWithStringValue($stringValue) {
        $instance = new parent("animation-name", $stringValue);
        return $instance;
    }
    
    public static function DeclarationAnimationNameWithStringKeyframe($stringKeyframe) {
        $instance = new parent("animation-name", $stringKeyframe);
        return $instance;
    }
    
    public static function stringValueNone() {
        return "none";
    }
}

?>