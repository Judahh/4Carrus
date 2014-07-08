<?php


class DeclarationTransform extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransform::DeclarationTransformWithStringValue($stringValue);
    public static function DeclarationTransformWithStringValue($stringValue) {
        $instance = new parent("transform", $stringValue);
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
