<?php


class DeclarationTransform extends Declaration{
//Constructor
//   instantiation: 
//      $declaration = DeclarationTransform::DeclarationTransformWithStringValue($stringValue);
    public static function DeclarationTransformWithStringValue($stringValue) {
        $instance = new parent("transform", $stringValue);
        return $instance;
    }
    
    
    
}
