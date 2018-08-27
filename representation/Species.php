<?php

/**
 * Class for species
 * @package representation
 * @author drixlerangelo
 * @since 24 August 2018
 */
class Species {

    private $popSize, $genomes, $avgFitness, $id;
    private $sumAdjustedFitness;
    private $extinctionCounter, $candidateGenome;

    /**
     * constructor
     * @param object oSpeciesCounterClass
     */
    public function __construct($oSpeciesCounterClass) {
        $oSpeciesCounterClass->increment();
        $this->id = $oSpeciesCounterClass->get();
        $this->popSize = 0;
        $this->genomes = array();
        $this->avgFitness = 0.0;
        $this->sumAdjustedFitness = 0.0;
        $this->extinctionCounter = 0;
        $this->candidateGenome = array();
    }

    /**
     * get method
     * @param string sArgs
     * @return mixed
     */
    public function __get($sArgs) {
        if(property_exists($this, $sArgs)) {
            return $this->{$sArgs};
        }

        $aDebugTrace = debug_backtrace();
        printPropertyError($sArgs, $aDebugTrace);
        return null;
    }

    /**
     * set method
     * @param string sArgs
     * @param mixed mValue
     */
    public function __set($sArgs, $mValue) {
        if(property_exists($this, $sArgs)) {
            $this->{$sArgs} = $mValue;
        } else {
            $aDebugTrace = debug_backtrace();
            printPropertyError($sArgs, $aDebugTrace);
        }
    }
}