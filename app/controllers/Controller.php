<?php

namespace App\controllers;

use Database\DBconnect;

abstract class Controller
{
    protected DBconnect $db;
    public function __construct(DBconnect $db)
    {
        if (session_status() === PHP_SESSION_NONE){
            session_start();
        }
        $this->db = $db;
    }

    protected function view(string $path, array $params = null){
        //$cars = $params['cars'];
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        include VIEWS . $path .'.php';
        $content = ob_get_clean();
//        var_dump($params['car']);
        include VIEWS . 'layout.php';
    }

    protected function getDB(){
        return $this->db;
    }

    protected function checkRole(): ?string
    {
        if (isset($_SESSION['role'])) {
            return $_SESSION['role'];
        }
        return null;
    }

    protected function isAdmin(): bool
    {
        return $this->checkRole() === 'admin';
    }

    protected function isManager(): bool
    {
        return $this->checkRole() === 'gestionnaire';
    }

    protected function isClient(): bool
    {
        return $this->checkRole() === 'client';
    }

    protected function requireAdmin(): void
    {
        if (!$this->isAdmin()) {
            header('Location: /access-denied');
            exit();
        }
    }

    protected function requireManager(): void
    {
        if (!$this->isManager()) {
            header('Location: /access-denied');
            exit();
        }
    }

    protected function requireClient(): void
    {
        if (!$this->isClient()) {
            header('Location: /access-denied');
            exit();
        }
    }
}