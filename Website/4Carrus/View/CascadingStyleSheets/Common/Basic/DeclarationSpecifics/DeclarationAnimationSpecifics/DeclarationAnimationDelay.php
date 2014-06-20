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
class DeclarationAnimationDelay extends DeclarationAnimation {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationDelayWithStringDuration($stringDuration) {
        $instance = new parent("animation-delay", $stringDuration); //arrumar
        return $instance;
    }

    public static function DeclarationAnimationDelayWithIntDurationSeconds($intDurationSeconds) {
        $instance = new parent("animation-delay", $intDurationSeconds . "s"); //arrumar
        return $instance;
    }
    
    public static function DeclarationAnimationDelayWithIntDurationMiliseconds($intDurationMiliseconds) {
        $instance = new parent("animation-delay", $intDurationMiliseconds . "s"); //arrumar
        return $instance;
    }
    
    public static function DeclarationAnimationDelayWithStringValue($stringValue) {
        $instance = new parent("animation-delay", $stringValue); //arrumar
        return $instance;
    }
}

?>