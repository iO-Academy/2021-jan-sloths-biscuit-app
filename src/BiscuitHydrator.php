<?php

namespace BiscuitApp;

use PDO;

class BiscuitHydrator
{
    public static function getBiscuitObjects(PDO $db): array
    {
        $query = $db->prepare('SELECT * FROM `biscuits`');
        $query->setFetchMode(PDO::FETCH_CLASS, Biscuit::class);
        $query->execute();
        return $query->fetchAll();
    }
}
