<?php

/**
 * DeclarationTransitionDuration [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransitionDuration extends DeclarationTransition{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransitionDuration::DeclarationTransitionDurationWithStringValue($stringValue);
    public static function DeclarationTransitionDurationWithStringValue($stringValue) {
        $instance = new parent("transition-duration", $stringValue);
        return $instance;
    }
  
    public static function DeclarationTextIndentWithBasicTime($basicTime) {
        $instance = new parent("time", $basicTime->stringBasicTime());
        return $instance;
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