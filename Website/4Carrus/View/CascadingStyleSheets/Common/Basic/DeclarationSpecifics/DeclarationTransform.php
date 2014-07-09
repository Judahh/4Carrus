<?php


class DeclarationTransform extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransform::DeclarationTransformWithStringValue($stringValue);
    public static function DeclarationTransformWithStringValue($stringValue) {
        $instance = new parent("transform", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicMatrix($basicMatrix) {
        $instance = new parent("transform", $basicMatrix->stringBasicMatrix());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicMatrixThreeDimencional($basicMatrixThreeDimencional) {
        $instance = new parent("transform", $basicMatrixThreeDimencional->stringBasicMatrix());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicTranslate($basicTranslate) {
        $instance = new parent("transform", $basicTranslate->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicTranslateThreeDimencional($basicTranslateThreeDimencional) {
        $instance = new parent("transform", $asicTranslateThreeDimencional->stringBasicTranslate());
        return $instance;
    }
    public static function DeclarationTransformWithBasicTranslateHorizontal($basicTranslateHorizontal) {
        $instance = new parent("transform", $basicTranslateHorizontal->stringBasicTranslate());
        return $instance;
    }
    public static function DeclarationTransformWithBasicTranslateVertical($basicTranslateVertical) {
        $instance = new parent("transform", $basicTranslateVertical->stringBasicTranslate());
        return $instance;
    }
    public static function DeclarationTransformWithBasicTranslate($basicTranslate) {
        $instance = new parent("transform", $basicTranslate->stringBasicTranslate());
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
