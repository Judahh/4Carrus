<?php

    class MultipleSelectorBootstrapButtonBtn extends Selector {
       //Constructors
       //   instantiation: 
       //      $selector = Selector::SelectorWithStringName($stringName);
       //      $selector = Selector::SelectorWithStringNameWithStringType($stringName, $stringType);
       //      $selector = Selector::SelectorWithStringNameWithStringClassElement($stringName, $stringClassElement);
       //      $selector = Selector::SelectorWithStringNameWithStringTypeWithStringClassElement($stringName, $stringType, $stringClassElement);
       public static function MultipleSelectorBootstrapButtonBtn() {
          $instance = new self($arraySelector, array());
          $selectorBootstrapButtonBtn =  SelectorBootstrapButtonBtn::SelectorBootstrapButtonBtn();
          addSelectorWithSelector($selectorBootstrapButtonBtn);
          return $instance;
       }
    }

?>