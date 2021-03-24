<?php

namespace BiscuitApp\Test;

require_once '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class BiscuitDisplayerTest extends TestCase
{
    public function testSuccessBiscuitDisplayer()
    {
        $bourbonBiscuitObject = new BiscuitTest();

        $expectedOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div>
                <div class="item-data"><h3>RDT: 7</h3></div></div>';
        $actualOutput = $biscuitDisplayer->printBiscuits($bourbonBiscuitObject);



        $this->assertEquals($expectedOutput, $actualOutput);
    }

//    $actualOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div>
//                <div class="item-data"><h3>RDT: 7</h3></div></div>';







    public function testSuccessBiscuitDisplayer() {
        $allBiscuitsObject = [{ ["name"]=> "Bourbon", ["img"]=> "assets/images/bourbons-unedited.jpg", ["RDT"]=> "7", ["desc"]=> ["wikipedia"]=> "https://en.wikipedia.org/wiki/Bourbon_biscuit", ["ID"]=> "1", ["description"]=> "The Bourbon biscuit is a sandwich style biscuit consisting of two thin rectangular dark chocolate-flavoured biscuits with a chocolate buttercream filling." }];
        $biscuitString = '';

        forEach($allBiscuitsObject as $biscuitCard) {

            $biscuitString .=
                '<div class="card"><div class="item-header"><h2>' .
                $biscuitCard->name .
                '</h2></div><div class="item-img"><img src="' . $biscuitCard->img . '" alt="' . $biscuitCard->name . ' biscuit' .
                '"></div>
                <div class="item-data"><h3>RDT: ' . $biscuitCard->RDT .
                '</h3></div></div>';
        }
        return $biscuitString;


        $expectedOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div>
                <div class="item-data"><h3>RDT: 7</h3></div></div>';
        $actualOutput = printBicuits('');

        $this->assertEquals($expectedOutput, $actualOutput);
    }
}
