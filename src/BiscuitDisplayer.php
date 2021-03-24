<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class BiscuitDisplayer
{
    static public function printBiscuits(array $allBiscuitObjects): string
    {
        $biscuitsString = '';
        foreach ($allBiscuitObjects as $biscuitObject) {
            $name = $biscuitObject->getName();
            $image = $biscuitObject->getImg();
            $RDT = $biscuitObject->getRDT();

            $biscuitsString .=
                '<div class="card"><div class="item-header"><h2>' . $name . '</h2></div><div class="item-img"><img src="' . $image . '" alt="' . $name . ' biscuit' . '"></div><div class="item-data"><h3>RDT: ' . $RDT . '</h3></div></div>';
        }
        return $biscuitsString;
    }
}
