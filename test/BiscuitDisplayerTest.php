<?php

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

        $biscuitMockTwo = $this->createMock(Biscuit::class);
        $biscuitMockTwo->expects($this->once())->method('getName')->willReturn('Danny');
        $biscuitMockTwo->expects($this->once())->method('getImg')->willReturn('assets/images/bourbons-unedited.jpg');
        $biscuitMockTwo->expects($this->once())->method('getRDT')->willReturn('111');


        $input = [$biscuitMock, $biscuitMockTwo];


        $expectedOutput = '<div class="card"><div class="item-header"><h2>Bourbon</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div><div class="item-data"><h3>Recommended dunking time:</h3><p class="number-display">7 seconds</p></div></div>'.'<div class="card"><div class="item-header"><h2>Danny</h2></div><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Danny biscuit"></div><div class="item-data"><h3>Recommended dunking time:</h3><p class="number-display">111 seconds</p></div></div>';
        $actualOutput = BiscuitDisplayer::printBiscuits($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}






