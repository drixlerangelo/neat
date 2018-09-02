<pre>
<?php

require_once 'init.php';

$iSampleInput = 10;
$iSampleOutput = 5;

$oModel = new Trader($iSampleInput, $iSampleOutput);

$oConstant = new Constant($oModel);

$oSpeciesCounter = new SpeciesCounter();
$oGenomeCounter = new GenomeCounter();
$oSynapseCounter = new SynapseCounter();

$oSeedSpecies = new Species($oSpeciesCounter);

$oSeedGenome = new Genome($oConstant, $oGenomeCounter);

$oMutation = new Mutation($oConstant, $oSynapseCounter);

$oMutation->mutateAddSynapse($oSeedGenome);

$aGenomes = $oSeedSpecies->genomes;
array_push($aGenomes, $oSeedGenome);
$oSeedSpecies->genomes = $aGenomes;

$aSpecies = $oModel->species;
array_push($aSpecies, $oSeedSpecies);
$oModel->species = $aSpecies;

$iNumOfGenerations = 2;

for($iGeneration = 0; $iGeneration < $iNumOfGenerations; $iGeneration++) {
    $oModel->generation = $iGeneration;
    simulateEvolution($oModel);
}

?>
</pre>