<?php

namespace BiscuitApp\Test;

require_once '../vendor/autoload.php';

use BiscuitApp\Biscuit;
use BiscuitApp\BiscuitDetailPrinter;
use PHPUnit\Framework\TestCase;

class BiscuitDetailPrinterTest extends TestCase
{
    public function testSuccessBiscuitDetailPrinter()
    {
        $biscuitMock = $this->createMock(Biscuit::class);
        $biscuitMock->expects($this->once())->method('getName')->willReturn('Bourbon');
        $biscuitMock->expects($this->once())->method('getImg')->willReturn('assets/images/bourbons-unedited.jpg');
        $biscuitMock->expects($this->once())->method('getRDT')->willReturn('7');
        $biscuitMock->expects($this->once())->method('getDescription')->willReturn('The Bourbon biscuit is a sandwich style biscuit consisting of two thin rectangular dark chocolate-flavoured biscuits with a chocolate buttercream filling.');
        $biscuitMock->expects($this->once())->method('getWikipedia')->willReturn('https://en.wikipedia.org/wiki/Bourbon_biscuit');
        $input = $biscuitMock;


        $expectedOutput = '<div class="card"><div class="title-container"><div class="item-header">
<h2>Bourbon</h2></div></div>
<div class="column-container"><div class="item-img"><img src="assets/images/bourbons-unedited.jpg" alt="Bourbon biscuit"></div></div>
<div class="item-description-container"><div class="item-description"><p>The Bourbon biscuit is a sandwich style biscuit consisting of two thin rectangular dark chocolate-flavoured biscuits with a chocolate buttercream filling.</p></div><div class="item-data"><h3>RDT: 7</h3></div><div class="wiki-btn"><a href="https://en.wikipedia.org/wiki/Bourbon_biscuit"><p>Wikipedia page</p></a><div class="back-btn"><a href="index.php"><img src="assets/images/bourbon-btn.png"></a></div></div></div>';
        $actualOutput = BiscuitDetailPrinter::printBiscuit($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}

