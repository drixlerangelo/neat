<?php

/**
 * Class for mutation operation
 * @package ops
 * @author drixler_angelo
 * @since 25 August 2018
 */

class Mutation {

    private $oConstants;

    /**
     * constructor
     * @param object oConstants
     */
    public function __construct($oConstants) {
        $this->oConstants = $oConstants;
    }

    /**
     * chooses what mutations will
     * be done on the organism (genome)
     * @param object oGenome
     */
    public function mutate($oGenome) {

        if (rand() < $this->oConstants->get('weightMutationChance')) {
            $this->mutateSynapseWeight($oGenome);
        }
    }

    /**
     * Mutates the synapse weights
     * @param object oGenome
     */
    private function mutateSynapseWeight($oGenome) {

    }

    /**
     * Mutation where synapse is added
     * @param object oGenome
     */
    private function mutateAddSynapse($oGenome) {

    }

    /**
     * Mutation where a node is added
     * @param object oGenome
     */
    private function mutateAddNode($oGenome) {

    }
}