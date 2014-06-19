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
class DeclarationAnimation extends Declaration {

    //Constructor
    //   instantiation: 
    //      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationAnimationWithStringValue($stringValue) {
        $instance = new parent("color", ":" . $stringValue); //arrumar
        return $instance;
    }

    //todo constructo with int

    public function stringDeclaration() {
        $stringFullDeclaration = "";
        $browserDiffer = BrowserDiffer::getInstance();
        foreach ($browserDiffer as &$browserDifferItem) {
            $stringFullDeclaration = $stringFullDeclaration . $browserDifferItem . $this->stringProperty . $this->stringValue . ";";
        }
        return $stringFullDeclaration;
    }

}

?>