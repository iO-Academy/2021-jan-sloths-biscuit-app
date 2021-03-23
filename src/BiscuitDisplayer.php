<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class BiscuitDisplayer
{

    static public function printBiscuits(array $allBiscuitsObject): string {
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
    }
}