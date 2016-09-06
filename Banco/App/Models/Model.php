<?php

namespace App\Models;

use \Core\Database\Database as Database;

abstract class Model
{
    private $database;

    public function __construct($configs)
    {
        $this->database = new Database($configs);
    }

    public function getDatabase()
    {
        return $this->database;
    }
}