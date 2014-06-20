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

    public static function
    DeclarationAnimationWithAnimationValue($animationValue) {
        $stringFullValue = "";
        $arrayAnimationValue = $animationValue->getArrayAnimationValue();
        $count = count($arrayAnimationValue);
        for ($index = 0; $index < $count - 1; $index++) {
            $stringFullValue = $stringFullValue . $arrayAnimationValue[$index] . " ";
        }
        $stringFullValue = $stringFullValue . $arrayAnimationValue[$count-1];
        $instance = new parent("animation", $stringFullValue);
        return $instance;
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

    public function stringDeclaration() {
        $stringFullDeclaration = "";
        $arrayStringBrowserPrefix = BrowserDiffer::getInstance()->getArrayStringBrowserPrefix();
        foreach ($arrayStringBrowserPrefix as &$stringBrowserPrefix) {
            $stringFullDeclaration = $stringFullDeclaration . $stringBrowserPrefix . $this->stringProperty . ":" . $this->stringValue . ";";
        }
        return $stringFullDeclaration;
    }

}

?>