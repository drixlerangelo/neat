<?

/**
 * Class for constants
 * @author drixler_angelo
 * @since 24 August 2018
 */
class Constant {
    private $inputs;
    private $outputs;
    
    private $babiesPerGeneration = 20;
    private $fittestPercentage = 0.7;
    private $weightMutationChance = 0.8;
    private $addSynapseChance = 1.0;
    private $addNodeChance = 0.3;
    private $weightPerturbMutateChance = 0.9;
    private $weightRandomMutateChance = 0.1;
    private $perturbBias = 0.1;
    private $inheritDisabledChance = 0.75;
    private $reproduceAsexuallyChance = 0.25;
    private $extinctionCoverage = 0.4;
    private $extinctionMarker = 3;

    private $compatC1 = 1;
    private $compatC2 = 1;
    private $compatC3 = 0.4;
    private $smallGenomeThres = 20;
    private $compatThreshold = 2.5;

    private $fitnessWeight = 3;

    /**
     * constructor
     * @param int inputs
     * @param int outputs
     */
    public function __construct($inputs = 1, $outputs = 1) {
        $this->inputs = $inputs;
        $this->outputs = $outputs;
        echo 'constants created.<br>';
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
}