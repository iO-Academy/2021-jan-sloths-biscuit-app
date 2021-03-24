<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class BiscuitDisplayer
{
    static public function printBiscuits(array $allBiscuitsObject): string
    {
        $biscuitString = '';
        foreach ($allBiscuitsObject as $biscuitCard) {
            $name = $biscuitCard->getName();
            $image = $biscuitCard->getImg();
            $RDT = $biscuitCard->getRDT();

            $biscuitString .=
                '<div class="card"><div class="item-header"><h2>' . $name . '</h2></div><div class="item-img"><img src="' . $image . '" alt="' . $name . ' biscuit' . '"></div><div class="item-data"><h3>RDT: ' . $RDT . '</h3></div></div>';
        }
        return $biscuitString;
    }
}
