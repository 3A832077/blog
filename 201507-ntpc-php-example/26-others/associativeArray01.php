<?php

// Create an array of associative arrays (an array of users).
$users = [
    ['id' => 1, 'name' => 'Anne', ],
    ['id' => 2, 'name' => 'Mary', ],
    ['id' => 3, 'name' => 'Jenny',],
    ['id' => 4, 'name' => 'Joe',  ],

];

echo '<pre>';
echo "\n";


// Dump data of the third user.
echo "ID:{$users[2]['id']}, Name: {$users[2]['name']}\n\n";

// Dump data of each user.
foreach ($users as $user) {
    // Output.
    echo "ID:{$user['id']}, Name: {$user['name']}\n";
}

echo '</pre>';
