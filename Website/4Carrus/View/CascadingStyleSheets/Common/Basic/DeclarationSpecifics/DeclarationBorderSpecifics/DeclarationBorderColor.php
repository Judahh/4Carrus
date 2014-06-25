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
class DeclarationBorderColor extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderColorWithStringValue($stringValue) {
        $instance = new parent("border-color", $stringValue); //arrumar
        return $instance;
    }
    
    public static function DeclarationBorderColorWithBasicColorAllBorders
            ($basicColorAllBorders) {
        $instance = new parent("border-color", $basicColorAllBorders->stringBasicColor());
        return $instance;
    }
    
    public static function 
            DeclarationBorderColorWithBasicColorTopAndBottomBordersWithBasicColorRightAndLeftBorders
            ($basicColorTopAndBottomBorders, $basicColorRightAndLeftBorders) {
        $instance = new parent("border-color", $basicColorTopAndBottomBorders->stringBasicColor()." ".$basicColorRightAndLeftBorders->stringBasicColor());
        return $instance;
    }
    
    public static function 
            DeclarationBorderColorWithBasicColorTopBorderWithBasicColorRightAndLeftBordersWithBasicColorBottomBorder
            ($basicColorTopBorder, $basicColorRightAndLeftBorders, $basicColorBottomBorder) {
        $instance = new parent("border-color", $basicColorTopBorder->stringBasicColor()." ".$basicColorRightAndLeftBorders->stringBasicColor()." ".$basicColorBottomBorder->stringBasicColor());
        return $instance;
    }
    
    public static function 
            DeclarationBorderColorWithBasicColorTopBorderWithBasicColorRightBorderWithBasicColorBottomBorderWithBasicColorLeftBorder
            ($basicColorTopBorder, $basicColorRightBorder, $basicColorBottomBorder, $basicColorLeftBorder) {
        $instance = new parent("border-color", $basicColorTopBorder->stringBasicColor()." ".$basicColorRightBorder->stringBasicColor()." ".$basicColorBottomBorder->stringBasicColor()." ".$basicColorLeftBorder->stringBasicColor());
        return $instance;
    }
    
    public static function stringValueTransparent() {
        return "transparent";
    }
}

?>