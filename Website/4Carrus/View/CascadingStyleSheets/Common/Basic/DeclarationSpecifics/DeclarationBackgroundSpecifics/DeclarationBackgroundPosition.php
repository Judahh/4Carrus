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
class DeclarationBackgroundPosition extends DeclarationBackground {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBackgroundPositionWithStringValue($stringValue) {
        $instance = new parent("background-position", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBackgroundPositionWithStringXPositionValue($stringXPositionValue) {
        $instance = new parent("background-position", $stringXPositionValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPercentValue($floatXPercentValue) {
        $instance = new parent("background-position", $floatXPercentValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPixelValue($floatXPixelValue) {
        $instance = new parent("background-position", $floatXPixelValue."px"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXCentimeterValue($floatXCentimeterValue) {
        $instance = new parent("background-position", $floatXCentimeterValue."cm"); //arrumar
        return $instance;
    }
    
    
    public static function DeclarationBackgroundPositionWithStringXPositionValueWithStringYPositionValue($stringXPositionValue, $stringYPositionValue) {
        $instance = new parent("background-position", $stringXPositionValue." ".$stringYPositionValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPercentValueWithFloatYPercentValue($floatXPercentValue, $floatYPercentValue) {
        $instance = new parent("background-position", $floatXPercentValue."% ".$floatYPercentValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPixelValueWithFloatYPixelValue($floatXPixelValue, $floatYPixelValue) {
        $instance = new parent("background-position", $floatXPixelValue."px ".$floatYPixelValue."px"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXCentimeterValueWithFloatYCentimeterValue($floatXCentimeterValue, $floatYCentimeterValue) {
        $instance = new parent("background-position", $floatXCentimeterValue."cm ".$floatYCentimeterValue."cm"); //arrumar
        return $instance;
    }
    
    
    public static function DeclarationBackgroundPositionWithStringXPositionValueWithFloatYPercentValue($stringXPositionValue, $floatYPercentValue) {
        $instance = new parent("background-position", $stringXPositionValue." ".$floatYPercentValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithStringXPositionValueWithFloatYPixelValue($stringXPositionValue, $floatYPixelValue) {
        $instance = new parent("background-position", $stringXPositionValue." ".$floatYPixelValue."px"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithStringXPositionValueValueWithFloatYCentimeterValue($stringXPositionValue, $floatYCentimeterValue) {
        $instance = new parent("background-position", $stringXPositionValue." ".$floatYCentimeterValue."cm"); //arrumar
        return $instance;
    }
        
    
    public static function DeclarationBackgroundPositionWithFloatXPercentValueWithStringYPositionValue($floatXPercentValue, $stringYPositionValue) {
        $instance = new parent("background-position", $floatXPercentValue."% ".$stringYPositionValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPercentValueWithFloatYPixelValue($floatXPercentValue, $floatYPixelValue) {
        $instance = new parent("background-position", $floatXPercentValue."% ".$floatYPixelValue."px"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPercentValueWithFloatYCentimeterValue($floatXPercentValue, $floatYCentimeterValue) {
        $instance = new parent("background-position", $floatXPercentValue."% ".$floatYCentimeterValue."cm"); //arrumar
        return $instance;
    }
        
    
    public static function DeclarationBackgroundPositionWithFloatXPixelValueWithStringYPositionValue($floatXPixelValue, $stringYPositionValue) {
        $instance = new parent("background-position", $floatXPixelValue."px ".$stringYPositionValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPixelValueWithFloatYPercentValue($floatXPixelValue, $floatYPercentValue) {
        $instance = new parent("background-position", $floatXPixelValue."px ".$floatYPercentValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXPixelValueWithFloatYCentimeterValue($floatXPixelValue, $floatYCentimeterValue) {
        $instance = new parent("background-position", $floatXPixelValue."px ".$floatYCentimeterValue."cm"); //arrumar
        return $instance;
    }
        
    
    public static function DeclarationBackgroundPositionWithFloatXCentimeterValueWithStringYPositionValue($floatXCentimeterValue, $stringYPositionValue) {
        $instance = new parent("background-position", $floatXCentimeterValue."cm ".$stringYPositionValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXCentimeterValueWithFloatYPercentValue($floatXCentimeterValue, $floatYPercentValue) {
        $instance = new parent("background-position", $floatXCentimeterValue."cm ".$floatYPercentValue."%"); //arrumar
        return $instance;
    }
    
    public static function DeclarationBackgroundPositionWithFloatXCentimeterValueWithFloatYPixelValue($floatXCentimeterValue, $floatYPixelValue) {
        $instance = new parent("background-position", $floatXCentimeterValue."cm ".$floatYPixelValue."px"); //arrumar
        return $instance;
    }
    
    public static function stringPositionTopValue() {
        return "top";
    }
    
    public static function stringPositionCenterValue() {
        return "center";
    }
    
    public static function stringPositionBottomValue() {
        return "bottom";
    }
    
    public static function stringPositionLeftValue() {
        return "left";
    }
    
    public static function stringPositionRightValue() {
        return "right";
    }
}

?>