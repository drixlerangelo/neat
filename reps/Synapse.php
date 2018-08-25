<?php

/**
 * Class for synapse
 * @package reps
 * @author drixler_angelo
 * @since 24 August 2018
 */
class Synapse {

    private $histMark, $from, $to;
    private $weight, $enabled;

    /**
     * constructor
     */
    public function __construct() {
        $this->histMark = 0;
        $this->from = 0.;
        $this->to = 0.;
        $this->weight = 0.;
        $this->enabled = true;
    }

    /**
     * creates a new historical marking for
     * the synapse
     * @param object oSynapseCounter
     */
    public function new($oSynapseCounter) {
        $oSynapseCounter->increment();
        $this->histMark = $oSynapseCounter->get();
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
     * copies synapse to new synapse
     * @return object oNewSynapse
     */
    public function copy() {
        $oNewSynapse = new Synapse();
        
        $oNewSynapse->set('from', $this->get('from'));
        $oNewSynapse->set('to', $this->get('to'));
        $oNewSynapse->set('weight', $this->get('weight'));
        $oNewSynapse->set('enabled', $this->get('enabled'));

        return $oNewSynapse;
    }
}