<?php

/**
 * Class for species
 * @package reps
 * @author drixler_angelo
 * @since 24 August 2018
 */
class Species {

    private $popSize, $genomes, $avgFitness, $id;
    private $sumAdjFitness;
    private $extinxtionCounter, $candidateGenome;

    /**
     * constructor
     * @param object oSpeciesCounter
     */
    public function __construct($oSpeciesCounter) {
        $oSpeciesCounter->increment();
        $this->id = $oSpeciesCounter->get();
        $this->popSize = 0;
        $this->genomes = array();
        $this->avgFitness = 0.;
        $this->sumAdjustedFitness = 0.;
        $this->extinctionCounter = 0;
        $this->candidateGenome = array();
    }

    /**
     * get method
     * @param string sArgs
     * @return mixed
     */
    public function get($sArgs) {
        return $this->{$sArgs};
    }

    /**
     * set method
     * @param string sArgs
     * @param mixed mValue
     */
    public function set($sArgs, $mValue) {
        $this->{$sArgs} = $mValue;
    }
}