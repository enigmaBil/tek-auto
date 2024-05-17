<?php

namespace App\models;

class User extends Model
{
    protected $table = 'users';

    public function create(array $data, ?array $relations = null)
    {
        return parent::create($data);
    }

    public function findUserByEmail(string $email): ?Model
    {
        $user = $this->query("SELECT * FROM {$this->table} WHERE email = ?", [$email], true);
        if (!$user){
            return null;
        }
        return $user;
    }
}