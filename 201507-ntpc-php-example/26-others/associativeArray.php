<?php

// Create an associative array to store the different attributes of a user .
$user_attrs = [
    'id' => 'A2234567890',
    'name' => 'Anne',
    'sex' => 'F',
    'age' => 25,
];

echo '<pre>';
echo "\n";

// Two different ways to get the elements from an associative array.
echo "// Two different ways to get the elements from an associative array.\n";
echo "ID: {$user_attrs['id']}\n";
echo "Name: {$user_attrs['name']}\n";
echo "Sex: {$user_attrs['sex']}\n";
echo "Age: {$user_attrs['age']}\n\n";

foreach ($user_attrs as $key=>$user_attr){
    echo $key.": ".$user_attr."\n";
}
echo '</pre>';
echo "\n\n";


// Create an associative array.
$numbers = [
    'first'     => 1999,
    'second'    => 2020,
    'third'     => 7000,
    'fourth'    => 2019,
    'fifth'     => 2000,
];

echo '<pre>';
echo "\n";

// Dump a value.
echo "// Get the 'third' number from another associative array.\n";
echo $numbers['third']."\n";
echo '</pre>';
