<?php


namespace BiscuitApp;

require_once 'vendor/autoload.php';

use PDO;

class BiscuitDetailPrinter
{
    static public function printBiscuit($singleBiscuitObject): string
    {
        $name = $singleBiscuitObject->getName();
        $image = $singleBiscuitObject->getImg();
        $RDT = $singleBiscuitObject->getRDT();
        $description = $singleBiscuitObject->getDescription();
        $wikipedia = $singleBiscuitObject->getWikipedia();
        $ID = $singleBiscuitObject->getID();

//        $biscuitString =
//            '<div class="card"><div class="title-container"><div class="item-header"><h2>' . $name . '</h2></div><div class="column-container"></div><div class="item-img"><img src="' . $image . '" alt="' . $name . ' biscuit' . '"></div><div class="item-description-container"><div class="item-description"></h3><p>' . $description . '</p></div><div class="item-data"><h3>RDT: ' . $RDT . '</h3></div><div class="wiki-btn"><a href="' . $wikipedia . '">Wikipedia Page</a></div></div>';
//
        $biscuitString = '<img class="bg-image" src="' . $image . '">
<div class="card-single">
            
            <div class="title-container">
                <div class="item-header"><h2>' . $name . '</h2></div>
            </div>
            <div class="column-container">
                <div class="item-img"><img src="' . $image . '" alt=""></div>
                <div class="item-description-container">
                    <div class="item-description"><p>' . $description . '</p></div>
                    <div class="item-data"><h3>RDT: ' . $RDT . '</h3></div>
                    <div class="wiki-btn"><a href="' . $wikipedia . '"><p class="wiki-btn-text icon-animation">Wikipedia page</p></a></div>
                </div>
            </div>
            <div class="back-btn icon-animation">
                <a href="index.php"><img src="assets/images/bourbon-btn.png"></a>
            </div>
        </div>';

//        $biscuitString =
//            '<img class="bg-image" src="' . $image .'"><div class="header-container"><h1>That\'s the Way the Cookie Crumbles</h1></div><div class="outer-container"><div class="card"><div class="title-container"><div class="item-header"><h2>' . $name . '</h2></div></div><div class="column-container"><div class="item-img"><img src="' . $image . '" alt="' . $name . ' biscuit' . '"></div></div><div class="item-description-container"><div class="item-description"><p>' . $description . '</p></div><div class="item-data"><h3>Recommended dunking time: </h3><p class="number-display">' . $RDT . ' seconds</p></div><div class="wiki-btn"><a href="' . $wikipedia . '"><p>Wikipedia page</p></a></div></div></div><div class="back-btn icon-animation"><a href="index.php"><img src="assets/images/bourbon-btn.png"></a></div></div></div>';
        return $biscuitString;
    }
}
