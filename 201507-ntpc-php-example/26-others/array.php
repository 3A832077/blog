<?php

// Create an array of pandas.
$pandas = ['Lushui', 'Jasmina', 'Pali'];

echo '<pre>';
echo "\n";

// The way to get an element from the array, $pandas.
$panda = $pandas[1]; // Get the second panda
echo $panda."\n";    // Echo it

// Three different ways to get the elements from the array, $pandas.
for ($i=0; $i<3; $i++){
    echo $pandas[$i]."\n";
}
echo "\n";

foreach ($pandas as $panda){
    echo $panda."\n";
}
echo "\n";

foreach ($pandas as $i=>$panda){
    echo $i."=>".$panda."\n";
}

echo '</pre>';
