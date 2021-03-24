<?php

namespace BiscuitApp\Test;
use BiscuitApp\Biscuit;
use BiscuitApp\BiscuitDisplayer;

require_once "../BiscuitDisplayer.php";

use PHPUnit\Framework\TestCase;

class BiscuitDisplayerTest extends TestCase
{
    public function testSuccessPrintBiscuits()
    {
        $jammyDodgy = new Biscuit();
        $allBiscuitsObject = [$jammyDodgy];
        $jammyDodgy->name = 'Bourbon';
        $jammyDodgy->img = 'assets/images/bourbons-unedited.jpg';
        $jammyDodgy->RDT= 'RDT: 7';

        $input = $allBiscuitsObject;
        $expectedOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon"></div>
                <div class="item-data"><h3>RDT: 7</h3></div></div>';
        $actualOutput = BiscuitDisplayer::printBiscuits($input);

        $this->assertEquals($expectedOutput, $actualOutput);
    }
}





