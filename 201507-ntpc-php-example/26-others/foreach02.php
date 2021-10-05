<?php

// Create an array of pandas.
$pandas = [
    'first'     => 'Lushui',
    'second'    => 'Pali',
    'third'     => 'Jasmina'
];


echo '<pre>';
echo "\n";

// Iterate our panda array.
foreach ($pandas as $position => $panda) {

    // If the position variable equals 'second'.
    if ($position == 'second') {

        // Continue the iteration to skip the second panda.
        echo "Skip the {$position} panda\n";
        continue;
    }

    // Output.
    echo "You are the {$position} panda, {$panda}\n";
}

echo '</pre>';
