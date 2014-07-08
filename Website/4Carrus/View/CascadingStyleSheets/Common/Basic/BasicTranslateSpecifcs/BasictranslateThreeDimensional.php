<?php

/**
 * BasictranslateThreeDimensional [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasictranslateThreeDimensional extends BasicTranslate{
    public static function BasictranslateThreeDimensionalWithBasicLengthHorizontalWithBasicLengthVerticalWithBasicLengthBottom($basicLengthHorizontal, $basicLengthVertical, $basicLengthLongitudinal) {
        $instance = new parent("3d", $basicLengthHorizontal->stringBasicLength() . "," . $basicLengthVertical->stringBasicLength() . "," . $basicLengthLongitudinal->stringBasicLength());
        return $instance;
    }
}

?>