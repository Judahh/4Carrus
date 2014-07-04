<?php

/**
 * BasicVerticalAxis [TIPO]
 * Descrição
 * @copyright (c) year, Tarciso Torres Blue Lion
 */
class BasicVerticalAxis {
    private $stringValue;

    private function __construct($stringValue) {
        $this->stringValue = $stringValue;
    }

    public static function BasicVerticalAxisWithIntPositionCode($intVerticalAxisCode) {
        $stringValue;
        switch ($intVerticalAxisCode) {
            case 1:
                $stringValue = "right";
            break;

            case 2:
                $stringValue = "center";
            break;

            default:
                $stringValue = "left";
            break;
        }
        $instance = new self($stringValue);
        return $instance;
    }

    public static function basicVerticalAxisWithStringPositionValue($stringHorizontalAxisValue) {
        $instance = new self($stringHorizontalAxisValue);
        return $instance;
    }

    public function stringBasicVerticalAxis() {
        return $this->stringValue;
    }

    public static function stringHorizontalVerticalAxisLeftValue() {
        return "left";
    }

    public static function stringVerticalAxisCenterValue() {
        return "center";
    }

    public static function stringHorizontalAxisRightValue() {
        return "right";
    }
}

?>