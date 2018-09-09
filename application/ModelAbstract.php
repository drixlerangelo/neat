<?php

/**
 * Abstract for making models
 * using NEAT
 * @package application
 * @author drixlerangelo
 * @since 27 August 2018
 */
abstract class ModelAbstract implements ModelInterface {

    private $generation;
    private $species;
    private $inputs;
    private $outputs;

    /**
     * constructor
     * @param int iInputSize
     * @param int iOutputSize
     */
    public function __construct($iInputSize, $iOutputSize) {
        $this->inputs = $iInputSize;
        $this->outputs = $iOutputSize;
        $this->generation = 0;
        $this->species = array();
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