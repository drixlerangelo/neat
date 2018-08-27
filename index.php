<pre>
<?php

require_once 'init.php';

$iSampleInput = 10;
$iSampleOutput = 5;

$aModel = new Trader($iSampleInput, $iSampleOutput);

$oConstant = new Constant($aModel);

$oSpeciesCounter = new SpeciesCounter();
$oGenomeCounter = new GenomeCounter();
$oSynapseCounter = new SynapseCounter();

$oSeedSpecies = new Species($oSpeciesCounter);

$oSeedGenome = new Genome($oConstant, $oGenomeCounter);

$oMutation = new Mutation($oConstant, $oSynapseCounter);
var_dump($oSeedGenome);
$oMutation->mutateAddSynapse($oSeedGenome);
var_dump($oSeedGenome);

?>
</pre>