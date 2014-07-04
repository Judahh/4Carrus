<?php

/**
 * DeclarationTransformOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationTransformOrigin {
//Constructor
//   instantiation: 
//      $declaration = DeclarationColor::DeclarationColorWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationTransformOriginWithStringValue($stringValue) {
        $instance = new parent("transform-origin", $stringValue);
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