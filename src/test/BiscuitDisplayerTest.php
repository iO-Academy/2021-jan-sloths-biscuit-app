<?php

namespace BiscuitApp\Test;

require_once '../vendor/autoload.php';

use BiscuitApp\Biscuit;
use BiscuitApp\BiscuitDisplayer;
use PHPUnit\Framework\TestCase;

class BiscuitDisplayerTest extends TestCase
{
    public function testSuccessBiscuitDisplayer()
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->expects($this->once())->method('getName')->willReturn('Bourbon');
        $biscuitMock->expects($this->once())->method('getImg')->willReturn('assets/images/bourbons-unedited.jpg');
        $biscuitMock->expects($this->once())->method('getRDT')->willReturn('7');
        $biscuitMockArray = [$biscuitMock];

        $biscuitDisplayerTest = new BiscuitDisplayer();

        $expectedOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div><div class="item-data"><h3>RDT: 7</h3></div></div>';
        $actualOutput = $biscuitDisplayerTest->printBiscuits($biscuitMockArray);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}






