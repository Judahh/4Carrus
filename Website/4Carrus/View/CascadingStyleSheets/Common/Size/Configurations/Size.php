<?php

    class Size {

       private $booleanLengthPercentage;//type: Boolean
       private $booleanWidthPercentage;//type: Boolean
       private $integerLengthPercentage;//type: Integer
       private $integerWidthPercentage;//type: Integer
       private $integerLengthPixel;//type: Integer
       private $integerWidthPixel;//type: Integer

       function __construct($integerLengthPercentage,$integerWidthPercentage) {
          $this->$booleanLengthPercentage=true;
          $this->$booleanWidthPercentage=true;
          $this->$integerLengthPercentage=$integerLengthPercentage;
          $this->$integerWidthPercentage=$integerWidthPercentage;
          $this->$integerLengthPixel=0;
          $this->$integerWidthPixel=0;
       }

    }

?>