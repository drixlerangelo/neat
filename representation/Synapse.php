<?php

/**
 * Class for synapse
 * @package representation
 * @author drixlerangelo
 * @since 24 August 2018
 */
class Synapse {

    private $histMark, $from, $to;
    private $weight, $enabled;

    /**
     * constructor
     * @param object oSynapseCounterClass
     */
    public function __construct($oSynapseCounterClass) {
        $oSynapseCounterClass->increment();
        $this->histMark = $oSynapseCounterClass->get();
        $this->from = 0;
        $this->to = 0;
        $this->weight = 0.0;
        $this->enabled = true;
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
     * copies synapse to new synapse
     * @return object oNewSynapse
     */
    public function copy() {
        $oNewSynapse = new Synapse();
        
        $oNewSynapse->from = $this->from;
        $oNewSynapse->to = $this->to;
        $oNewSynapse->weight = $this->weight;
        $oNewSynapse->enabled = $this->enabled;

        return $oNewSynapse;
    }
}