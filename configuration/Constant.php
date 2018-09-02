<?php

/**
 * Class for constants
 * @package configuration
 * @author drixlerangelo
 * @since 24 August 2018
 */
class Constant {
    
    private $inputs;
    private $outputs;
    
    private $babiesPerGeneration = 20;
    private $fittestPercentage = 0.7;
    private $weightMutationChance = 0.8;
    private $addSynapseChance = 1.0;
    private $addNodeChance = 0.3;
    private $weightPerturbMutateChance = 0.9;
    private $weightRandomMutateChance = 0.1;
    private $perturbBias = 0.1;
    private $inheritDisabledChance = 0.75;
    private $reproduceAsexuallyChance = 0.25;
    private $extinctionCoverage = 0.4;
    private $extinctionMarker = 3;
    private $compatC1 = 1;
    private $compatC2 = 1;
    private $compatC3 = 0.4;
    private $smallGenomeThres = 20;
    private $compatThreshold = 2.5;
    private $fitnessWeight = 3;

    /**
     * constructor
     * @param object oModelClass
     */
    public function __construct($oModelClass) {
        $this->inputs = $oModelClass->inputs;
        $this->outputs = $oModelClass->outputs;
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
        
        $aTrace = debug_backtrace();
        printPropertyError($sArgs, $aTrace);

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
        }
        
        $aTrace = debug_backtrace();
        printPropertyError($sArgs, $aTrace);
    }
}