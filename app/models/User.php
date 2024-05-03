<?php

namespace App\models;

class User extends Model
{
    protected $table = 'users';

    public function create(array $data, ?array $relations = null)
    {
        return parent::create($data);
    }
}