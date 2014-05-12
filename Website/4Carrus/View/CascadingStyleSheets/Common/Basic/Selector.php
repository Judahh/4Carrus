<?php

    class Selector {//TODO: terminar de testar e colocar includes: Declaration e Attribute

       private $stringName;
       private $stringType;
       private $stringClassElement;
       private $stringPseudoClass;
       private $stringPseudoElement;
       private $attribute;
       private $listDeclaration;

       private function __construct($stringName, $stringType, $stringClassElement) {
          $this->stringName = $stringName;
          $this->stringType = $stringType;
          $this->stringClassElement = $stringClassElement;
          $this->stringPseudoClass = "";
          $this->stringPseudoElement = "";
          $this->attribute = "";
          $this->listDeclaration = array();
       }

       //Constructors
       //   instantiation: 
       //      $selector = Selector::SelectorWithStringName($stringName);
       //      $selector = Selector::SelectorWithStringNameWithStringType($stringName, $stringType);
       //      $selector = Selector::SelectorWithStringNameWithStringClassElement($stringName, $stringClassElement);
       //      $selector = Selector::SelectorWithStringNameWithStringTypeWithStringClassElement($stringName, $stringType, $stringClassElement);
       public static function SelectorWithStringName($stringName) {
          $instance = new self($stringName, "", "");
          return $instance;
       }

       public static function SelectorWithStringNameWithStringType($stringName, $stringType) {
          $instance = new self($stringName, $stringType, "");
          return $instance;
       }

       public static function SelectorWithStringNameWithStringClassElement($stringName, $stringClassElement) {
          $instance = new self($stringName, ".", $stringClassElement);
          return $instance;
       }

       public static function SelectorWithStringNameWithStringTypeWithStringClassElement($stringName, $stringType, $stringClassElement) {
          $instance = new self($stringName, $stringType, $stringClassElement);
          return $instance;
       }

       function setStringPseudoElement($stringPseudoElement) {
          $this->stringPseudoElement = "::" . $stringPseudoElement;
       }

       function setStringPseudoClass($stringPseudoClass) {
          $this->stringPseudoClass = ":" . $stringPseudoClass;
       }

       function setAttribute($attribute) {
          $this->attribute = $attribute;
       }

       function addDeclaration($declaration) {
          array_push($this->listDeclaration, $declaration);
       }

       function __toString() {
          return $this->getStringSelector();
       }

       function getStringBasicSelector() {
          return $this->stringClassElement . $this->stringType . $this->stringName . $this->attribute->getStringAttribute() . $this->stringPseudoElement . $this->stringPseudoClass;
       }

       function getStringSelector() {
          $stringSelector = $this->getStringBasicSelector() . "{";
          foreach ($this->listDeclaration as &$declaration) {
             $stringSelector = $stringSelector . $declaration->getStringDeclaration();
          }
          $stringSelector = $stringSelector . "}";
          unset($declaration);
          return $stringSelector;
       }

    }

?>