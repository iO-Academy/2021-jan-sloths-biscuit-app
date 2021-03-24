<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

use PDO;

$id = $_GET['id'];

// connecting to biscuit database
$db = new PDO('mysql:host=db; dbname=biscuits', 'root', 'password');
$query = $db->prepare('SELECT * FROM `biscuits` WHERE `id` = ?');
$query->setFetchMode(PDO::FETCH_CLASS, Biscuit::class);
$query->execute([$id]);
$singleBiscuitObject = $query->fetch()




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biscuit Database</title>
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
        <?php echo BiscuitDetailPrinter::printBiscuit($singleBiscuitObject) ?>
    </div>
</main>

</body>
</html>
