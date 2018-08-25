<?php

/**
 * Class for species 
 * @package reps
 * @author drixler_angelo
 * @since 24 August 2018
 */
class SpeciesCounter {
    
    private $speciesCounter;

    /**
     * constructor
     */
    public function __construct() {
        $this->speciesCounter = 0;
    }

    /**
     * increments species counter used
     * for species ids
     */
    public function increment() {
        $this->speciesCounter ++;
    }

    /**
     * gets the species counter
     * @return int
     */
    public function get() {
        return $this->speciesCounter;
    }
 }