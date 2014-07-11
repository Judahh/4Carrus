<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Element
 *
 * @author Judah
 */
class ElementBootstrapButton extends Element {
    public static function ElementBootstrapButton() {
        $instance = new parent(array());
        $multipleSelectorBootstrapButtonBtn =  MultipleSelectorBootstrapButtonBtn::MultipleSelectorBootstrapButtonBtn();
        addMultipleSelectorWithMultipleSelector($multipleSelectorBootstrapButtonBtn);
        return $instance;
    }
}
