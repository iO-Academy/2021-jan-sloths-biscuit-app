<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

use PDO;

class BiscuitHydrator
{
    static function getBiscuitObjects($db) {
        $query=$db->prepare('SELECT * FROM `biscuits`');
        $query->setFetchMode(PDO::FETCH_CLASS, Biscuit::class);
        $query->execute();
        return $query->fetchAll();
    }
}