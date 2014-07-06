<?php

/**
 * DeclarationPerspectiveOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class DeclarationPerspectiveOrigin extends Declaration{
    //Constructor
//   instantiation: 
//      $declaration = DeclarationPerspectiveOrigin::DeclarationPerspectiveOriginWithStringValue($stringValue);
    public static function DeclarationPerspectiveOriginWithStringValue($stringValue) {
        $instance = new parent("perspective-origin", $stringValue);
        return $instance;
    }
    
    public static function DeclarationPerspectivetWithBasicLength($basicLength) {
        $instance = new parent("perspective", $basicLength->stringBasicLength());
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