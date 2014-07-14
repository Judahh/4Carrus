<?php

/**
 * OutlineValue [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class OutlineValue {
    private $arrayOutlineValue;

    private function __construct() {
        
    }

    public static function
    OutlineValueWithStringOutlineDurationWithStringOutlineTimingFunctionWithStringOutlineDelayWithStringOutlineProperty
    ($stringOutlineDuration, $stringOutlineTimingFunction, $stringOutlineDelay, $stringOutlineProperty) {
        $instance = new self();
        array_push($this->arrayOutlineValue, $stringOutlineDuration);
        array_push($this->arrayOutlineValue, $stringOutlineTimingFunction);
        array_push($this->arrayOutlineValue, $stringOutlineDelay);
        array_push($this->arrayOutlineValue, $stringOutlineProperty);
        return $instance;
    }
    
    public static function
    OutlineValueWithDeclarationOutlineDurationWithDeclarationOutlineTimingFunctionWithDeclarationOutlineDelayWithDeclarationOutlineProperty
    ($declarationOutlineDuration, $declarationOutlineTimingFunction, $declarationOutlineDelay, $declarationOutlineProperty) {
        $instance = new self();
        
        array_push($this->arrayOutlineValue, $declarationOutlineDuration->getStringValue());
        array_push($this->arrayOutlineValue, $declarationOutlineTimingFunction->getStringValue());
        array_push($this->arrayOutlineValue, $declarationOutlineDelay->getStringValue());
        array_push($this->arrayOutlineValue, $declarationOutlineProperty->getStringValue());
        
        return $instance;
    }

    public static function OutlineValue() {
        $instance = new self();
        return $instance;
    }

    public static function getArrayOutlineValue() {
        return $this->arrayOutlineValue;
    }

    public function addStringValueWithStringValue($stringValue) {
        array_push($this->arrayOutlineValue, $stringValue);
    }
    
    public function addStringValueWithDeclarationOutlineSpecific($declarationOutlineSpecific) {
        array_push($this->arrayOutlineValue, $declarationOutlineSpecific->getStringValue());
    }

    public static function getArrayOutlineNameValue() {
        return OutlineNameValue::getInstance()->getArrayOutlineNameValue();
    }
    
}
?>