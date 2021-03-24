<?php

//namespace BiscuitApp;
//
//require_once 'vendor/autoload.php';
//
//use PDO;
//
//$id = $_GET['id'];
//
//// connecting to biscuit database
//$db = new PDO('mysql:host=db; dbname=biscuits', 'root', 'password');
//$query = $db->prepare('SELECT * FROM `biscuits` WHERE `id` = ?');
//$query->setFetchMode(PDO::FETCH_CLASS, Biscuit::class);
//$query->execute([$id]);
//$singleBiscuitObject = $query->fetch()




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
<!--    <div class="bg-image"></div>-->
    <img class="bg-image" src="assets/images/gingernut.jpg">
    <div class="header-container">
        <h1>That's the Way the Cookie Crumbles</h1>
    </div>
    <div  class="outer-container">
<!--        --><?php //echo BiscuitDetailPrinter::printBiscuit($singleBiscuitObject) ?>
        <div class="card">
            <div class="title-container">
                <div class="item-header"><h2>Gingernut</h2></div>
            </div>
            <div class="column-container">
                <div class="item-img"><img src="assets/images/gingernut.jpg" alt=""></div>
                <div class="item-description-container">
                    <div class="item-description"><p>A Ginger Nut is a globally popular biscuit flavoured with ginger. Ginger snaps are flavoured with powdered ginger and a variety of other spices, most commonly cinnamon, molasses and clove.</p></div>
                    <div class="item-data"><h3>RDT: 5</h3></div>
                    <div class="wiki-btn"><a href="https://en.wikipedia.org/wiki/Ginger_snap"><p class="wiki-btn-text icon-animation">Wikipedia page</p></a></div>
                </div>
            </div>
            <div class="back-btn icon-animation">
                <a href="index.php"><img src="assets/images/bourbon-btn.png"></a>
            </div>
        </div>
    </div>
</main>

</body>
</html>
