<?php

/**
 * Here are functions used in the
 * NEAT algorithm
 * @package configuration
 * @author drixlerangelo
 * @since 02 September 2018
 */

/**
 * This is where most operations
 * relating to the algorithm resides,
 * it is called every generation
 * @param object $oModelClass
 */
function simulateEvolution($oModelClass) {
    echo $oModelClass->generation."<br>";
    
    foreach ($oModelClass->species as $iCounter => $oSpecies) {
        calculateDeepFitness($oSpecies, $oModelClass);
    }
}

function calculateDeepFitness($oSpecies, $oModelClass) {
    foreach ($oSpecies->genomes as $iCounter => $oGenome) {
        $oGenome->fitness = $oModelClass->calculateFitness($oGenome);
        echo $oGenome->fitness;
    }
}

/**
 * Gets the neurons with their identification
 * @param array aSynapses
 * @return array aNeurons
 */
function generateNeurons($aSynapses, $iInputSize, $iOutputSize) {
    $aNeurons = array();
    $iNeuronCounter = 0;

    for($iCounter = 0; $iCounter < $iInputSize; $iCounter++) {
        array_push($aNeurons, $iNeuronCounter);
        $iNeuronCounter ++;
    }

    for($iCounter = 0; $iCounter < $iOutputSize; $iCounter++) {
        array_push($aNeurons, $iNeuronCounter);
        $iNeuronCounter ++;
    }

    for($iCounter = 0; $iCounter < count($aSynapses); $iCounter++) {
        $oSynapse = $aSynapses[$iCounter];
        
        if($oSynapse->from > ($iInputSize + $iOutputSize)) {
            array_push($aNeurons, $oSynapse->from);
        }
        
        if($oSynapse->to > ($iInputSize + $iOutputSize)) {
            array_push($aNeurons, $oSynapse->to);
        }
    }

    return $aNeurons;
}