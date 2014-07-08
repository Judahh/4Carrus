<?php

/**
 * BasicTranslateHorizontal [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */

class BasicTranslateHorizontal extends BasicTranslate {

    public static function BasicTranslateHorizontalWithBasicLengthHorizontal($basicLengthHorizontal) {
        $instance = new parent("x", $basicLengthHorizontal->stringBasicLength());
        return $instance;
    }

}

?>