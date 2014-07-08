<?php

/**
 * DeclarationTransformOrigin [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class DeclarationTransformOrigin extends DeclarationTransform{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransformOrigin::DeclarationTransformOriginWithStringHexColorValue($stringHexColorValue);
    public static function DeclarationTransformOriginWithStringValue($stringValue) {
        $instance = new parent("transform-origin", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicHorizontalAxis($basicHorizontalAxis) {
        $instance = new parent("x-axis", $basicHorizontalAxis->stringBasicHorizontalAxis());
        return $instance;
    }
    
    public static function DeclarationTransformOriginWithBasicVerticalAxis($basicVerticalAxis) {
        $instance = new parent("y-axis", $basicVerticalAxis->stringBasicVerticalAxis());
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