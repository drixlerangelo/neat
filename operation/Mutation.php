<?php

/**
 * Class for mutation operation
 * @package operation
 * @author drixlerangelo
 * @since 25 August 2018
 */

class Mutation {

    private $oConstant;

    /**
     * constructor
     * @param object oConstantClass
     */
    public function __construct($oConstantClass) {
        $this->oConstant = $oConstantClass;
    }

    /**
     * chooses what mutations will
     * be done on the organism (genome)
     * @param object oGenome
     */
    public function mutate($oGenome) {
        echo random() . "<br>";
        if (rand() < $this->oConstant->get('weightMutationChance')) {
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