<?php

namespace BiscuitApp;
require_once 'vendor/autoload.php';
use PDO;
// connecting to biscuit database
$db = new PDO('mysql:host=db; dbname=biscuits', 'root', 'password');
$hydrateBiscuitObject = new BiscuitHydrator();

// saving allBiscuitsObject from a variable into the database
$allBiscuitsObject = $hydrateBiscuitObject->getBiscuitObjects($db);
$dynamicBiscuitString = BiscuitDisplayer::printBiscuits($allBiscuitsObject);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IBD</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>

<main>
    <div class="header-container">
        <h1>That's the Way the Cookie Crumbles</h1>
    </div>
    <div  class="outer-container">
        <?php echo $dynamicBiscuitString ?>
    </div>
</main>

</body>
</html>
