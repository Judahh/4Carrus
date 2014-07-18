<?php
/**
 * Created by PhpStorm.
 * User: Tarciso Torres
 * Date: 18/07/14
 * Time: 18:15
 */
namespace View\CascadingStyleSheets\Common\Common;

use View\CascadingStyleSheets\Common\Style;

class StyleCommon extends Style{

    private $stringColor;

    private function _construct($stringColor) {
        parent();
        $this->stringColor=$stringColor;
    }

    public static function Style() {
        $instance = new self(blue);
        return $instance;
    }

    public static function StyleWithStringColor($stringColor) {
        $instance = new self($stringColor);
        return $instance;
    }

    /**
     * @param mixed $stringColor
     */
    public function setStringColor($stringColor)
    {
        $this->stringColor = $stringColor;
    }

    /**
     * @return mixed
     */
    public function getStringColor()
    {
        return $this->stringColor;
    }
} 