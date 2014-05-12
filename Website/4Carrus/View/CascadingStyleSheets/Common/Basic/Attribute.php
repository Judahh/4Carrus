<?php

    class Attribute {//TODO: terminar de testar

       private $stringAttribute;
       private $stringValue;
       private $stringValueRelation;

       //[attribute]
       //[attribute=value]
       //[attribute~=value]
       //[attribute|=value]
       //[attribute^=value]
       //[attribute$=value]
       //[attribute*=value]

       private function __construct($stringAttribute, $stringValue) {
          $this->stringAttribute = $stringAttribute;
          $this->stringValue = $stringValue;
       }

       //Constructors
       //   instantiation: 
       //      $attribute = Attribute::AttributeWithStringAttribute($stringAttribute);
       //      $attribute = Attribute::AttributeWithStringAttributeWithStringValue($stringAttribute, $stringValue);
       public static function AttributeWithStringAttribute($stringAttribute) {
          $instance = new self($stringAttribute, "");
          return $instance;
       }

       public static function AttributeWithStringAttributeWithStringValue($stringAttribute, $stringValue) {
          $instance = new self($stringAttribute, "=\"" . $stringValue . "\"");
          return $instance;
       }

       function setStringValueRelation($stringValueRelation) {
          $this->stringValueRelation = $stringValueRelation;
       }

       function __toString() {
          return $this->getStringAttribute();
       }

       function getStringAttribute() {
          return "[" . $this->stringAttribute . $this->stringValueRelation . $this->stringValue . "]";
       }

    }

?>