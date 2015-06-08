<?php

require __DIR__ . '/../app/autoload.php';

use App\Manager\Manager;

$manager = new Manager();

$result = $manager->add(
    filter_input(INPUT_GET, 'x'),
    filter_input(INPUT_GET, 'y')
);

echo 'The output is: ' . $result;