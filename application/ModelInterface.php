<?php

/**
 * Interface of model for
 * applications using NEAT
 * @package application
 * @author drixlerangelo
 * @since 09 September 2018
 */
interface ModelInterface {
    /**
     * fitness calculator of the model per genome
     * differs per application
     * @param object $oGenome
     */
    public function calculateFitness(Genome $oGenome);
}