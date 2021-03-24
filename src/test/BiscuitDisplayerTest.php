<?php

namespace BiscuitApp\Test;
use BiscuitApp\BiscuitDisplayer;

require_once "../BiscuitDisplayer.php";

use BiscuitApp\BiscuitDisplayer;

class BiscuitDisplayerTest extends TestCase
{
    public function testSuccessprintBiscuits()
    {
        $jammyDodger = new BiscuitDisplayer();

         $allBiscuitsObject = [
            "name" => "Bourbon",
            "img" => "assets/images/bourbons-unedited.jpg",
            "RDT" => "7"
        ];

        $jammyDodger::printBiscuits($allBiscuitsObject);

        $expectedOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div>
                <div class="item-data"><h3>RDT: 7</h3></div></div>';
        $actualOutput = $jammyDodger::printBiscuits($allBiscuitsObject);

        $this->assertEquals($expectedOutput, $actualOutput);
    }
}




//forEach($allBiscuitsObject as $biscuitCard) {
//    $biscuitString .=
//        '<div class="card"><div class="item-header"><h2>' .
//        $biscuitCard->name .
//        '</h2></div><div class="item-img"><img src="' . $biscuitCard->img . '" alt="' . $biscuitCard->name . ' biscuit' .
//        '"></div>
//                <div class="item-data"><h3>RDT: ' . $biscuitCard->RDT .
//        '</h3></div></div>';
//}



