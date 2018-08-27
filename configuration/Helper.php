<?php

/**
 * This is where commonly-used functions
 * are located that doesn't need to have
 * a class
 * @package configuration
 * @author drixlerangelo
 * @since 27 August 2018
 */

/**
 * Returns a random floating-point value
 * @return float
 */
function random() {
    return mt_rand() / mt_getrandmax();
}

function printPropertyError($sProperty, $aDebugTrace) {
    trigger_error(
        'Undefined property ' . $sProperty . ' called via ' . $aDebugTrace[0]['function'] . 
        ' function:<br>Failure on ' . $aDebugTrace[0]['class'] . 
        ' class call from ' . $aDebugTrace[0]['file'] . ' on line ' . $aDebugTrace[0]['line'], 
        E_USER_NOTICE
    );
}