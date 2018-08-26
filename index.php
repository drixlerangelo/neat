<pre>
<?php

require_once 'init.php';
include_once './configuration/Library.php';
echo random() . "<br>";
$oConstant = new Constant();
$oCrossover = new Crossover();
$oMutation = new Mutation($oConstant);
$oMutation->mutate(null);

$oSynapseCounter = new SynapseCounter();
$oSynapse1 = new Synapse();
$oSynapse1->set('weight', mt_rand() / mt_getrandmax());
// $oSynapse2 = new Synapse();
// $oSynapse3 = $oSynapse1->copy();
// $oSynapse3->new($oSynapseCounter);
var_dump($oSynapse1);
// var_dump($oSynapse2);
// var_dump($oSynapse3);

?>
</pre>