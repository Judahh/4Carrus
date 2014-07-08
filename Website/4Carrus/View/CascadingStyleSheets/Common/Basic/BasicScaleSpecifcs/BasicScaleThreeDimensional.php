<?php

/**
 * BasicScaleThreeDimensional [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicScaleThreeDimensional {
    public static function BasicScaleThreeDimensionalWithBasicLengthHorizontalWithBasicLengthVerticalWithBasicLengthBottom($basicLengthHorizontal, $basicLengthVertical, $basicLengthLongitudinal) {
        $instance = new parent("3d", $basicLengthHorizontal->stringBasicLength() . "," . $basicLengthVertical->stringBasicLength() . "," . $basicLengthLongitudinal->stringBasicLength());
        return $instance;
    }
}

?>