<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

class BiscuitDisplayer
{
//'<div class="card">
//<div class="item-header"></div>
//<div class="item-img"></div>
//<div class="item-data"></div>
//</div>'

static function printBiscuits($allBiscuitsObject) {
    $biscuitString = '';
    forEach($allBiscuitsObject as $biscuitCard) {

        $biscuitString .= '<div class="header-container">
        <div class="card">
            <div class="item-header"><h2>' .
        $biscuitCard->name .
        '</h2>
            <div class="item-img"><img src="' .
            $biscuitCard->img">
            <div class="item-data"><h3>RDT: 5</h3>
    </div>';
            return "name: $biscuitCard->name</br>";
    }
}
}