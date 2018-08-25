<?php

/**
 * Class for genome
 * @package reps
 * @author drixler_angelo
 * @since 24 August 2018
 */
class Genome {
    private $synapses, $maxNeuron, $id;
    private $fitness, $adjFitness;

    /**
     * constructor
     * @param object oConstants
     * @param object oGenomeCounter
     */
    public function __construct($oConstants, $oGenomeCounter) {
        $oGenomeCounter->increment();
        $this->id = $oGenomeCounter->get();
        $this->synapses = array();
        $this->maxNeuron = $oConstants->get('inputs') + $oConstants->get('outputs');
        $this->fitness = 0.;
        $this->adjFitness = 0.;
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

    /**
     * copies genome to new genome
     * @return object oNewGenome
     */
    public function copy() {
        $oNewGenome = new Genome();
        
        $oNewGenome->set('id', $this->get('id'));
        $oNewGenome->set('synapses', $this->get('synapses'));
        $oNewGenome->set('maxNeuron', $this->get('maxNeuron'));
        $oNewGenome->set('fitness', $this->get('fitness'));
        $oNewGenome->set('adjFitness', $this->get('adjFitness'));

        return $oNewSynapse;
    }
}