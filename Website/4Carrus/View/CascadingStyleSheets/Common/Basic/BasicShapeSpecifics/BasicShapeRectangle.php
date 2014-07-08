<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
