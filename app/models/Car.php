<?php

namespace App\models;

use PDO;

class Car extends Model
{
    protected $table = 'voitures';

    public function create(array $data, ?array $relations = null)
    {
         return parent::create($data);
    }

}