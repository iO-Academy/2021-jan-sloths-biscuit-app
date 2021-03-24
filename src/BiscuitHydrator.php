<?php

namespace BiscuitApp;

require_once 'vendor/autoload.php';

use PDO;

class BiscuitHydrator
{
    public static function bakeBiscuit(PDO $db, $id)
    {
        $query = $db->prepare('SELECT * FROM `biscuits` WHERE `id` = ?');
        $query->setFetchMode(PDO::FETCH_CLASS, Biscuit::class);
        $query->execute([$id]);
        return $query->fetch();
    }
}
