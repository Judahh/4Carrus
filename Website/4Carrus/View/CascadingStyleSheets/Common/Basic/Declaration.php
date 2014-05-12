<?php

    class Declaration {//TODO: terminar de testar

       private $stringProperty;
       private $stringValue;

       private function __construct($stringProperty, $stringValue) {
          $this->stringProperty = $stringProperty;
          $this->stringValue = $stringValue;
       }

       //Constructor
       //   instantiation: 
       //      $declaration = Declaration::DeclarationWithStringPropertyWithStringValue($stringProperty, $stringValue);
       public static function DeclarationWithStringPropertyWithStringValue($stringProperty, $stringValue) {
          $instance = new self($stringProperty, ":".$stringValue);
          return $instance;
       }

       function __toString() {
          return $this->getStringDeclaration();
       }

       function getStringDeclaration() {
          return $this->stringProperty . $this->stringValue . ";";
       }

    }

?>