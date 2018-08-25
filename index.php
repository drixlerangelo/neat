<pre>
<?php

require_once './Constant.php';
require_once './ops/Crossover.php';
require_once './ops/Mutation.php';
require_once './reps/Synapse.php';
require_once './reps/SynapseCounter.php';

// $oConstants = new Constants();
// $mutate = new Crossover();
// $cross = new Mutation();
// var_dump($mutate->sayHi());

$oSynapseCounter = new SynapseCounter();
$oSynapse1 = new Synapse();
$oSynapse1->set('weight', rand()/1000000000);
$oSynapse2 = new Synapse();
$oSynapse3 = $oSynapse1->copy();
$oSynapse3->new($oSynapseCounter);
var_dump($oSynapse1);
var_dump($oSynapse2);
var_dump($oSynapse3);

?>
</pre>