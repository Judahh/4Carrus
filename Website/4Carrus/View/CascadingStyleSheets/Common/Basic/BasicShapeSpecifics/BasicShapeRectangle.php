<?php

/**
 * Description of Shape
 *
 * @author Judah
 */

class BasicShapeRectangle {

    public static function BasicShapeRectangleWithBasicLengthTopWithBasicLengthRightWithBasicLengthBottomWithBasicLengthLeft($basicLengthTop, $basicLengthRight, $basicLengthBottom, $basicLengthLeft) {
        $instance = new parent("rect", $basicLengthTop->stringBasicLength() . "," . $basicLengthRight->stringBasicLength() . "," . $basicLengthBottom->stringBasicLength() . "," . $basicLengthLeft->stringBasicLength()); //arrumar
        return $instance;
    }

}
