<?php

/**
 * Class for synapse counter
 * @package representation
 * @author drixlerangelo
 * @since 24 August 2018
 */
 class SynapseCounter {

    private $synapseCounter;

    /**
     * constructor
     */
    public function __construct() {
        $this->synapseCounter = 0;
    }

    /**
     * increments synapse counter used
     * for historical marking
     */
    public function increment() {
        $this->synapseCounter ++;
    }

    /**
     * gets the synapse counter
     * @return int
     */
    public function get() {
        return $this->synapseCounter;
    }
 }