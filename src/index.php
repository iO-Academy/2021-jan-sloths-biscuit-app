<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

use PDO;

// connecting to biscuit database
$db = new PDO('mysql:host=db; dbname=biscuits', 'root', 'password');
$hydrateBiscuitObject = new BiscuitHydrator();

// saving allBiscuitsObject from a variable into the database
$allBiscuitsObject=$hydrateBiscuitObject->getBiscuitObjects($db);

echo BiscuitDisplayer::printBiscuits($allBiscuitsObject);

