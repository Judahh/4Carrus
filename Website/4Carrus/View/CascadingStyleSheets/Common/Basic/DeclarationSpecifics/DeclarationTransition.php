<?php
/**
 * DeclarationUnicodeBidirectional [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationTransition extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransition::DeclarationTransitionWithStringValue($stringValue);
    public static function DeclarationTransitionWithStringValue($stringValue) {
        $instance = new parent("transition", $stringValue);
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
