<?php
    class SelectorBootstrapButtonBtn extends Selector {
       public static function SelectorBootstrapButtonBtn() {
          $instance = new self("btn", ".", "");
          return $instance;
       }
    }

?>