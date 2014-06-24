<?php

/**
 * DeclarationQuotes [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

//Constructor
//   instantiation: 
//      $declaration = DeclarationQuotes::DeclarationQuotesWithStringValue($stringValue);
class DeclarationQuotes extends Declaration{
    public static function DeclarationQuotesWithStringValue($stringValue) {
        $instance = new parent("quotes", $stringValue);
        return $instance;
    }
    
    
}

?>