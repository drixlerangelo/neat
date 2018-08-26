<?php

/**
 * @package configuration
 * @author drixlerangelo
 * @since 27 August 2018
 */

function random() {
    return mt_rand() / mt_getrandmax();
}