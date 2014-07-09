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
        $instance = new parent("transform", $basicScale->stringBasicScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicTranslateLongitudinal($basicTranslateLongitudinal) {
        $instance = new parent("transform", $basicTranslateLongitudinal->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicScale($basicScale) {
        $instance = new parent("transform", $basicTranslateLongitudinal->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicScaleThreeDimencional($basicScaleThreeDimencional) {
        $instance = new parent("transform", $basicScaleThreeDimencional->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicScaleHorizontal($basicTranslateHorizontal) {
        $instance = new parent("transform", $basicTranslateHorizontal->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicScaleVertical($basicScaleVertical) {
        $instance = new parent("transform", $basicScaleVertical->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicScaleLongitudinal($basicScaleLongitudinal) {
        $instance = new parent("transform", $basicScaleLongitudinal->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicRotate($basicRotate) {
        $instance = new parent("transform", $basicRotate->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicRotateThreeDimencional($basicRotateThreeDimencional) {
        $instance = new parent("transform", $basicRotateThreeDimencional->stringBasicTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicRotateHorizontal($basicRotateHorizontal) {
        $instance = new parent("transform", $basicRotateHorizontal->stringBasicRotate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicRotateVertical($basicRotateHorizontal) {
        $instance = new parent("transform", $basicRotateHorizontal->stringBasicRotate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicRotateLongitudinal($basicRotateLongitudinal) {
        $instance = new parent("transform", $basicRotateLongitudinal->stringBasicRotate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicSkew($basicSkew) {
        $instance = new parent("transform", $basicSkew->stringBasicSkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicSkewHorizontal($basicSkewHorizontal) {
        $instance = new parent("transform", $basicSkewHorizontal->stringBasicSkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicSkewVertical($basicSkewVertical) {
        $instance = new parent("transform", $basicSkewVertical->stringBasicSkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicPerspective($basicPerspective) {
        $instance = new parent("transform", $basicPerspective>stringBasicPerspective());
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
