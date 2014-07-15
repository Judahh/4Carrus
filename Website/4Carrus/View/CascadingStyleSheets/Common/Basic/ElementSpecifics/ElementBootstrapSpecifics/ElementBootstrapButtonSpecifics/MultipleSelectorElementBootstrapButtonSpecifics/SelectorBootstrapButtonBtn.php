<?php
    class SelectorBootstrapButtonBtn extends Selector {
       public static function SelectorBootstrapButtonDotBtn() {
          $instance = new parent("btn", ".", "");
          addDeclarationWithDeclaration(DeclarationDisplay::DeclarationDisplayWithStringValue(DeclarationDisplay::stringValueInlineBlock()));
          return $instance;
       }
       
       public static function SelectorBootstrapButtonBtn() {
          $instance = new parent("btn", "", "");
          return $instance;
       }
    }

?>