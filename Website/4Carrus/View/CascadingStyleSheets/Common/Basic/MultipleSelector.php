<?php

    class MultipleSelector {//TODO: terminar de testar e colocar include: Selector

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
                $stringSelector = $selectorItem->getStringSelector();
             } else {
                $stringSelector = $stringSelector . "," . $selectorItem->getStringSelector();
             }
          }
          unset($selectorItem);
          return $stringSelector;
       }

       function getStringSelector() {
          $stringSelector = $this->getStringBasicSelector() . "{";
          foreach ($this->listDeclaration as &$declaration) {
             $stringSelector = $stringSelector . $declaration->getStringDeclaration();
          }
          unset($declaration);
          $stringSelector = $stringSelector . "}";

          return $stringSelector;
       }

    }
?>