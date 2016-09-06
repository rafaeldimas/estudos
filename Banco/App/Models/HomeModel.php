<?php

namespace App\Models;

use App\Models\Model as Model;

class HomeModel extends Model
{
    public function index()
    {
        return parent::getDatabase();
    }
}