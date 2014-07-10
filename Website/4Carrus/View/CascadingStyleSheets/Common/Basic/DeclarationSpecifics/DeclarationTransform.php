<?php


class DeclarationTransform extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransform::DeclarationTransformWithStringValue($stringValue);
    public static function DeclarationTransformWithStringValue($stringValue) {
        $instance = new parent("transform", $stringValue);
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrix($auxiliaryMatrix) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotate($auxiliaryRotate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate());
        return $instance;
    }
    public static function DeclarationTransformWithAuxiliaryScale($auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryScale>-stringAuxiliaryScale());
        return $instance;
    }
    public static function DeclarationTransformWithAuxiliarySkew($auxiliarySkew) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    public static function DeclarationTransformWithAuxiliaryTranslate($auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithBasicPerspective($basicPerspective) {
        $instance = new parent("transform", $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotate($auxiliaryMatrix, $auxiliaryRotate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliaryRotate->stringAuxiliaryRotate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryScale($auxiliaryMatrix, $auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliaryScale->stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliarySkew($auxiliaryMatrix, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithBasicPerspective($auxiliaryMatrix, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " .$basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryScale($auxiliaryRotate, $auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " .$auxiliaryScale->stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliarySkew($auxiliaryRotate, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithAuxiliaryTranslate($auxiliaryRotate, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryRotateWithBasicPerspective($auxiliaryRotate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryRotate->stringAuxiliaryRotate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliarySkew($auxiliaryScale, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithAuxiliaryTranslate($auxiliaryScale, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryScaleWithBasicPerspective($auxiliaryScale, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryScale->stringAuxiliaryScale(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliarySkewWithAuxiliaryTranslate($auxiliarySkew, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliarySkewWithBasicPerspective($auxiliarySkew, $basicPerspective) {
        $instance = new parent("transform", $auxiliarySkew->stringAuxiliarySkew(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTranslateWithAuxiliarySkewWithBasicPerspective($auxiliaryTranslate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryTranslate->stringAuxiliaryTranslate(). " " . $basicPerspective->stringBasicPerspective());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryScale($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryScale) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryScale->stringAuxiliaryScale());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliarySkew($auxiliaryMatrix, $auxiliaryRotate, $auxiliarySkew) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliarySkew->stringAuxiliarySkew());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithAuxiliaryTranslate($auxiliaryMatrix, $auxiliaryRotate, $auxiliaryTranslate) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $auxiliaryTranslate->stringAuxiliaryTranslate());
        return $instance;
    }
    
    public static function DeclarationTransformWithAuxiliaryMatrixWithAuxiliaryRotateWithBasicPerspective($auxiliaryMatrix, $auxiliaryRotate, $basicPerspective) {
        $instance = new parent("transform", $auxiliaryMatrix->stringAuxiliaryMatrix(). " " . $auxiliaryRotate->stringAuxiliaryRotate(). " " . $basicPerspective->stringBasicPerspective());
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
