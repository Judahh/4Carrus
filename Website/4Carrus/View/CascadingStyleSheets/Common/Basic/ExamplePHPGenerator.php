<html>
   <head>
      <title>Online PHP Script Execution</title>

      <?php

          class MultipleSelector {//TODO: terminar

             private $listSelector;
             private $listDeclaration;

             private function __construct($listSelector, $listDeclaration) {
                $this->listSelector = $listSelector;
                $this->listDeclaration = $listDeclaration;
             }

             //Constructors
             //   instantiation: 
             //      $multipleSelector = MultipleSelector::MultipleSelectorWithListSelector($listSelector);
             //      $multipleSelector = MultipleSelector::MultipleSelectorWithListSelectorWithListDeclaration($listSelector, $listDeclaration);
             public static function MultipleSelectorWithListSelector($listSelector) {
                $instance = new self($listSelector, array());
                return $instance;
             }

             public static function MultipleSelectorWithListSelectorWithListDeclaration($listSelector, $listDeclaration) {
                $instance = new self($listSelector, $listDeclaration);
                return $instance;
             }

             function addDeclaration($declaration) {
                array_push($this->listDeclaration, $declaration);
             }

             function addSelector($selector) {
                array_push($this->listSelector, $selector);
             }

             function __toString() {
                return $this->getStringSelector();
             }

             function getStringBasicSelector() {
                $stringSelector = "";
                foreach ($this->listSelector as &$selectorItem) {
                   if (empty($stringSelector)) {
                      $stringSelector = $selectorItem->stringSelector();
                   } else {
                      $stringSelector = $stringSelector . "," . $selectorItem->stringSelector();
                   }
                }
                unset($selectorItem);
                return $stringSelector;
             }

             function getStringSelector() {
                $stringSelector = $this->getStringBasicSelector() . "{";
                foreach ($this->listDeclaration as &$declaration) {
                   $stringSelector = $stringSelector . $declaration->stringDeclaration();
                }
                unset($declaration);
                $stringSelector = $stringSelector . "}";

                return $stringSelector;
             }

          }
      ?>
      <?php

          class Declaration {//TODO: terminar

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
                $instance = new self($stringProperty, ":" . $stringValue);
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

      <?php

          class Selector {//TODO: terminar

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
                return $this->stringClassElement . $this->stringType . $this->stringName . $this->attribute->stringAttribute() . $this->stringPseudoElement . $this->stringPseudoClass;
             }

             function getStringSelector() {
                $stringSelector = $this->getStringBasicSelector() . "{";
                foreach ($this->listDeclaration as &$declaration) {
                   $stringSelector = $stringSelector . $declaration->stringDeclaration();
                }
                $stringSelector = $stringSelector . "}";
                unset($declaration);
                return $stringSelector;
             }

          }
      ?>

      <?php

          class Attribute {//TODO: terminar

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

      <style>
         <?php
             $selector = Selector::SelectorWithStringName("a");
             $attribute = Attribute::AttributeWithStringAttribute("target");
             $selector->setAttribute($attribute);
             $declaration = Declaration::DeclarationWithStringPropertyWithStringValue("background-color", "yellow");
             $selector->addDeclaration($declaration);
             echo $selector->getStringSelector();
         ?>
      </style>
   </head>
   <body>
      <p>The links with a target attribute gets a yellow background:</p>

      <a href="http://www.w3schools.com">w3schools.com</a>
      <a href="http://www.disney.com" target="_blank">disney.com</a>
      <a href="http://www.wikipedia.org" target="_top">wikipedia.org</a>

      <p><b>Note:</b> For [<i>attribute</i>] to work in IE8 and earlier, a DOCTYPE must be declared.</p>
   </body>
</html>