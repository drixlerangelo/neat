<?php

/**
 * Abstract class for making models
 * using NEAT
 * @package application
 * @author drixlerangelo
 * @since 27 August 2018
 */
abstract class Model {

    protected $iGeneration;
    protected $aSpecies;
    protected $iInputs;
    protected $iOutputs;

    /**
     * constructor
     * @param int iInputSize
     * @param int iOutputSize
     */
    public function __construct($iInputSize, $iOutputSize) {
        $this->iInputs = $iInputSize;
        $this->iOutputs = $iOutputSize;
        $this->iGeneration = 0;
        $this->aSpecies = array();
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
    }
}