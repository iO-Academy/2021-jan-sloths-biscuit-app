<?php
require_once 'vendor/autoload.php';

use BiscuitApp\BiscuitDisplayer;
use BiscuitApp\BiscuitHydrator;

// connecting to biscuit database
$db = new PDO('mysql:host=db; dbname=biscuits', 'root', 'password');

// saving allBiscuitsObject from a variable into the database
$allBiscuitsObject = BiscuitHydrator::getBiscuitObjects($db);
$dynamicBiscuitString = BiscuitDisplayer::printBiscuits($allBiscuitsObject);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biscuit Database</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Roboto:wght@400;500&display=swap"
          rel="stylesheet">
</head>
<body>

<main>
    <div class="header-container">
        <h1>That's the Way the Cookie Crumbles</h1>
    </div>
    <div class="outer-container">
        <?php echo $dynamicBiscuitString ?>
    </div>
</main>

</body>
</html>
