<?php

/**
 * Abstract class that holds commonly-used
 * functions in a class
 * @package configuration
 * @author drixlerangelo
 * @since 27 August 2018
 */

abstract class Common {

    /**
     * set method
     * @param string sProperty
     * @param mixed mValue
     */
    public function __set($sProperty, $mValue) {
        if(property_exists($this, $sProperty)) {
            $this->{$sProperty} = $mValue;
        } else {
            $aDebugTrace = debug_backtrace();
            printPropertyError($sProperty, $aDebugTrace);
        }
    }

    /**
     * get method
     * @param string sProperty
     * @return mixed
     */
    public function __get($sProperty) {
        if(property_exists($this, $sProperty)) {
            return $this->{$sProperty};
        }

        $aDebugTrace = debug_backtrace();
        printPropertyError($sProperty, $aDebugTrace);
        return null;
    }
}