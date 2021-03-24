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

        $biscuitString =
            '<div class="card"><div class="item-header"><h2>' . $name . '</h2></div><div class="item-img"><img src="' . $image . '" alt="' . $name . ' biscuit' . '"></div><div class="item-data"><h3>Description:</h3><p>' . $description . '</p><h3>RDT: ' . $RDT . '</h3></div><a href="' . $wikipedia . '">More Biscuit Info</a></div>';
        return $biscuitString;
    }
}
