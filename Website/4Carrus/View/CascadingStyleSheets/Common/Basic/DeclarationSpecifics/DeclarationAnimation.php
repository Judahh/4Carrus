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
    public static function DeclarationAnimationWithStringDurationWithStringKeyframeWithStringloop($stringDuration, $stringKeyframe, $stringLoop) {
        $instance = new parent("animation", $stringKeyframe . " " . $stringDuration . " " . $stringLoop);
        return $instance;
    }
    
    public static function DeclarationAnimationWithIntDurationSecondsWithStringKeyframeWithStringloop($intDurationSeconds, $stringKeyframe, $stringLoop) {
        $instance = new parent("animation", $stringKeyframe . " " . $intDurationSeconds . "s " . $stringLoop);
        return $instance;
    }

    public static function stringValueInitial() {
        return "initial";
    }

    public static function stringValueInherit() {
        return "inherit";
    }

    public static function stringLoopInfinite() {
        return "infinite";
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