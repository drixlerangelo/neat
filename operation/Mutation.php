<?php

/**
 * Class for mutation operation
 * @package operation
 * @author drixlerangelo
 * @since 25 August 2018
 */

class Mutation {

    private $oConstant;
    private $oSynapseCounter;

    /**
     * constructor
     * @param object oConstantClass
     */
    public function __construct($oConstantClass, $oSynapseCounterClass) {
        $this->oConstant = $oConstantClass;
        $this->oSynapseCounter = $oSynapseCounterClass;
    }

    /**
     * chooses what mutations will
     * be done on the organism (genome)
     * @param object oGenome
     */
    public function mutate($oGenome) {
        
        if(random() < $this->oConstant->weightMutationChance) {
            $this->mutateSynapseWeight($oGenome);
        }

        if(random() < $this->oConstant->addSynapseChance) {
            $this->mutateAddSynapse($oGenome);
        }

        if(random() < $this->oConstant->addNodeChance) {
            $this->mutateAddNode($oGenome);
        }
    }

    /**
     * Mutates the synapse weights
     * @param object oGenome
     */
    public function mutateSynapseWeight($oGenome) {
        
    }

    /**
     * Mutation where synapse is added
     * @param object oGenome
     */
    public function mutateAddSynapse($oGenome) {
        $iInputSize = $this->oConstant->inputs;
        $iOutputSize = $this->oConstant->outputs;
        $aNeurons = generateNeurons($oGenome->synapses, $iInputSize, $iOutputSize);
        $fromNode = $this->getRandomNeuron($aNeurons, true, 0);
        $toNode = $this->getRandomNeuron($aNeurons, false, $fromNode);

        $oNewSynapse = new Synapse($this->oSynapseCounter);
        $oNewSynapse->from = $fromNode;
        $oNewSynapse->to = $toNode;
        $oNewSynapse->weight = random();
        $aSynapses = $oGenome->synapses;
        array_push($aSynapses, $oNewSynapse);
        $oGenome->synapses = $aSynapses;
    }

    /**
     * Mutation where a node is added
     * @param object oGenome
     */
    public function mutateAddNode($oGenome) {
        
    }

    /**
     * Picks a random neuron for from 
     * and to nodes for creating synapses
     * @param array aNeurons
     * @param bool bStartAtInput
     * @param int iPrevPick
     * @return int iRandomPick
     */
    public function getRandomNeuron($aNeurons, $bStartAtInput, $iPrevPick) {
        $iStartValue = ($bStartAtInput === true) ? 0 : $this->oConstant->inputs;
        $iEndValue = ($bStartAtInput === true) ? $this->oConstant->inputs - 1 : count($aNeurons) - 1;
        // $iEndValue = count($aNeurons) - 1;

        $iRandomPick = rand($iStartValue, $iEndValue);

        if($iRandomPick === $iPrevPick) {
            return $this->getRandomNeuron($aNeurons, $bStartAtInput, $iPrevPick);
        }

        return $iRandomPick;
    }
}