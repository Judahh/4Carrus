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
class DeclarationBorderImageOutset extends DeclarationBorderImage {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBorderImageOutset::DeclarationBorderImageOutsetWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderImageOutsetWithStringValue($stringValue) {
        $instance = new parent("border-image-outset", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderImageOutsetWithBasicLengthAllBorders($basicLengthAllBorders) {
        $instance = new parent("border-image-outset", $basicLengthAllBorders->stringBasicLength()); //arrumar
        return $instance;
    }
    
    public static function 
            DeclarationBorderImageOutsetWithBasicLengthTopAndBottomBordersWithBasicLengthRightAndLeftBorders
            ($basicLengthTopAndBottomBorders, $basicLengthRightAndLeftBorders) {
        $instance = new parent("border-image-outset", $basicLengthTopAndBottomBorders->stringBasicLength()." ".$basicLengthRightAndLeftBorders->stringBasicLength());
        return $instance;
    }
    
    public static function 
            DeclarationBorderImageOutsetWithBasicLengthTopBorderWithBasicLengthRightAndLeftBordersWithBasicLengthBottomBorder
            ($basicLengthTopBorder, $basicLengthRightAndLeftBorders, $basicLengthBottomBorder) {
        $instance = new parent("border-image-outset", $basicLengthTopBorder->stringBasicLength()." ".$basicLengthRightAndLeftBorders->stringBasicLength()." ".$basicLengthBottomBorder->stringBasicLength());
        return $instance;
    }
    
    public static function 
            DeclarationBorderImageOutsetWithBasicLengthTopBorderWithBasicLengthRightBorderWithBasicLengthBottomBorderWithBasicLengthLeftBorder
            ($basicLengthTopBorder, $basicLengthRightBorder, $basicLengthBottomBorder, $basicLengthLeftBorder) {
        $instance = new parent("border-image-outset", $basicLengthTopBorder->stringBasicLength()." ".$basicLengthRightBorder->stringBasicLength()." ".$basicLengthBottomBorder->stringBasicLength()." ".$basicLengthLeftBorder->stringBasicLength());
        return $instance;
    }
    
    public static function DeclarationBorderImageOutsetWithIntAllBordersBorderWidthValue($intAllBordersBorderWidthValue) {
        $instance = new parent("border-image-outset", $intAllBordersBorderWidthValue); //arrumar
        return $instance;
    }

    public static function 
            DeclarationBorderImageOutsetWithIntTopAndBottomBordersBorderWidthValueWithIntRightAndLeftBordersBorderWidthValue
            ($intTopAndBottomBordersBorderWidthValue, $intRightAndLeftBordersBorderWidthValue) {
        $instance = new parent("border-image-outset", $intTopAndBottomBordersBorderWidthValue." ".$intRightAndLeftBordersBorderWidthValue);
        return $instance;
    }
    
    public static function 
            DeclarationBorderImageOutsetWithIntTopBorderBorderWidthValueWithIntRightAndLeftBordersBorderWidthValueWithIntBottomBorderBorderWidthValue
            ($intTopBorderBorderWidthValue, $intRightAndLeftBordersBorderWidthValue, $intBottomBorderBorderWidthValue) {
        $instance = new parent("border-image-outset", $intTopBorderBorderWidthValue." ".$intRightAndLeftBordersBorderWidthValue." ".$intBottomBorderBorderWidthValue);
        return $instance;
    }
    
    public static function 
            DeclarationBorderImageOutsetWithIntTopBorderBorderWidthValueWithIntRightBorderBorderWidthValueWithIntBottomBorderBorderWidthValueWithIntLeftBorderBorderWidthValue
            ($intTopBorderBorderWidthValue, $intRightBorderBorderWidthValue, $intBottomBorderBorderWidthValue, $intLeftBorderBorderWidthValue) {
        $instance = new parent("border-image-outset", $intTopBorderBorderWidthValue." ".$intRightBorderBorderWidthValue." ".$intBottomBorderBorderWidthValue." ".$intLeftBorderBorderWidthValue);
        return $instance;
    }
}

?>