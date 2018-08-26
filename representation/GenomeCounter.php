<?php

/**
 * Class for genome counter
 * @package representation
 * @author drixlerangelo
 * @since 24 August 2018
 */
class GenomeCounter {
    
    private $genomeCounter;

    /**
     * constructor
     */
    public function __construct() {
        $this->genomeCounter = 0;
    }

    /**
     * increments genome counter used
     * for genome ids
     */
    public function increment() {
        $this->genomeCounter ++;
    }

    /**
     * gets the genome counter
     * @return int
     */
    public function get() {
        return $this->genomeCounter;
    }
 }