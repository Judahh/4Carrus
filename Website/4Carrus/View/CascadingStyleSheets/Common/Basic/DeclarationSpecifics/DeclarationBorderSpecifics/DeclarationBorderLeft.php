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
class DeclarationBorderLeft extends DeclarationBorder {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationBackgroundColor::DeclarationBackgroundColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationBorderLeftWithStringValue($stringValue) {
        $instance = new parent("border-left", $stringValue); //arrumar
        return $instance;
    }

    public static function DeclarationBorderLeftWithBorderLeftValue($borderLeftValue) {
        $stringFullValue = "";
        $arrayBorderLeftValue = $borderLeftValue->getArrayBorderLeftValue();
        $count = count($arrayBorderLeftValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayBorderLeftValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayBorderLeftValue[$count - 1];
        $instance = new parent("border-left", $stringFullValue);
        return $instance;
    }

}

?>