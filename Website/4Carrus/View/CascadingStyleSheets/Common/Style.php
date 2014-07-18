<?php
/**
 * Created by PhpStorm.
 * User: Tarciso Torres
 * Date: 18/07/14
 * Time: 18:09
 */

namespace View\CascadingStyleSheets\Common;


class Style {
    protected function __construct() {
    }

    public static function Style() {
        $instance = new self();
        return $instance;
    }
} 