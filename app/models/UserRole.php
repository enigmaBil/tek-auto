<?php

namespace App\models;

use Database\DBconnect;

class UserRole extends Model
{
    protected $table = 'users_to_roles';
    public function __construct(DBconnect $db)
    {
        parent::__construct($db);
    }

    public function findByUserId(int $user_id)
    {
        $sql = "SELECT users_to_roles.role_id
                FROM users_to_roles 
                WHERE users_to_roles.user_id = ?";
        return $this->query($sql, [$user_id]);
    }

}