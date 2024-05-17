<?php

namespace App\controllers;

use App\models\Role;
use App\models\User;
use App\models\UserRole;
use App\validations\Validator;
use Database\DBconnect;

class AuthController extends Controller
{
    protected User $userModel;
    protected Role $roleModel;
    protected UserRole $userRole;

    public function __construct(DBconnect $db)
    {
        parent::__construct($db);
        $this->userModel = new User($db);
        $this->roleModel = new Role($db);
        $this->userRole = new UserRole($db);
    }

    public function performLogin(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            if (empty($email) || empty($password)) {
                $error_message = "Veuillez remplir tous les champs.";
                $_SESSION['errors'][] = $error_message;
                return header('Location: /admin');
            }

            // Rechercher l'utilisateur par email
            $user = $this->userModel->findUserByEmail($email);

            $userR = $this->userRole->findByUserId($user->id);
//            var_dump($userR[0]->role_id);die();
            $role = $this->roleModel->findById($userR[0]->role_id);
//            var_dump($user->id);die();
            if (!$user) {
                $error_message = "Aucun utilisateur avec cette adresse email.";
                $_SESSION['errors'][] = $error_message;
                return header('Location: /admin');
            }

            // Vérifier le mot de passe
            if (!password_verify($password, $user->password)) {
                $error_message = "Mot de passe incorrect.";
                $_SESSION['errors'][] = $error_message;
                return header('Location: /admin');
            }

            // Authentification réussie, créer la session
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_pwd'] = $user->password;
            $_SESSION['user_name'] = $user->nom;
            $_SESSION['user_firstname'] = $user->prenom;
            $_SESSION['photo'] = $user->photo;
            $_SESSION['role'] = $role->nom;
//            var_dump($_SESSION);die();
            return header('Location: /admin/dashboard');

        }
        return false;
    }

    public function login()
    {
        return $this->view('admin.auth.login');
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /admin');
    }
}