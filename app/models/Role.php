<?php

namespace App\models;

class Role extends Model
{
    protected $table = 'roles';

    public function getRolePermissions(int $roleId):array
    {
        $sql = "SELECT permissions.nom 
                FROM permissions 
                JOIN permissions_to_roles ptr ON permissions.id = ptr.permission_id
                WHERE ptr.role_id = ?";
        return $this->query($sql, [$roleId]);
    }
}