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
        $this->maxNeuron = $oConstantClass->inputs + $oConstantClass->outputs;
        $this->fitness = 0.;
        $this->adjFitness = 0.;
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

    /**
     * copies genome to new genome
     * @return object oNewGenome
     */
    public function copy() {
        $oNewGenome = new Genome();
        
        $oNewGenome->id = $this->id;
        $oNewGenome->synapses = $this->synapses;
        $oNewGenome->maxNeuron = $this->maxNeuron;
        $oNewGenome->fitness = $this->fitness;
        $oNewGenome->adjFitness = $this->adjFitness;

        return $oNewSynapse;
    }
}