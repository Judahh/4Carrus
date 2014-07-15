<?php
/**
 * Description of MultipleSelectorBootstrapButton
 *
 * @author Judah
 */
class MultipleSelectorBootstrapButton extends Selector {
    public static function MultipleSelectorBootstrapButton() {
        $instance = new parent($arraySelector, array());
        $selectorBootstrapButtonBtn = SelectorBootstrapButtonBtn::SelectorBootstrapButtonBtn();
        addSelectorWithSelector($selectorBootstrapButtonBtn);
        return $instance;
    }
}

?>
