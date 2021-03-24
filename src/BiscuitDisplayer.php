<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class BiscuitDisplayer
{

    static public function printBiscuits( $allBiscuitObjects) {
        $biscuitsString = '';
        forEach($allBiscuitObjects as $biscuitObject) {

            $biscuitsString .=
                '<div class="card"><div class="item-header"><h2>' .
            $biscuitObject->name .
            '</h2></div><div class="item-img"><img src="' . $biscuitObject->img . '" alt="' . $biscuitObject->name . ' biscuit' .
                '"></div>
                <div class="item-data"><h3>RDT: ' . $biscuitObject->RDT .
            '</h3></div></div>';
        }
        return $biscuitsString;
    }
}