<?php

/**
 * Class for genome
 * @package representation
 * @author drixlerangelo
 * @since 24 August 2018
 */
class Genome {
    private $synapses, $maxNeuron, $id;
    private $fitness, $adjFitness;

    /**
     * constructor
     * @param object oConstantClass
     * @param object oGenomeCounterClass
     */
    public function __construct($oConstantClass, $oGenomeCounterClass) {
        $oGenomeCounterClass->increment();
        $this->id = $oGenomeCounterClass->get();
        $this->synapses = array();
        $this->maxNeuron = $oConstantClass->get('inputs') + $oConstantClass->get('outputs');
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