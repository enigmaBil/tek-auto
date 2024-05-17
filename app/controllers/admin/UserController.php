<?php

namespace App\controllers\admin;

use App\controllers\Controller;
use App\models\Role;
use App\models\User;
use App\models\UserRole;
use Database\DBconnect;

class UserController extends Controller
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
    public function index(){

        $this->requireAdmin();
        $users = $this->userModel->all();//(new User($this->getDB()))->all();

//        var_dump($users);die();

        return $this->view('admin.users.index', compact('users'));

    }

    public function create(){
        $this->requireAdmin();

        return $this->view('admin.users.create');
    }

    public function store(){
        $this->requireAdmin();

        $user = $this->userModel;//new User($this->getDB());

        // Traitement de l'image téléchargée
        $photoPath = $this->handleUploadedPhoto();

        if ($photoPath !== null){
            // Récupération et échappement des données du formulaire
            $nom = htmlspecialchars($_POST['nom'] ?? '');
            $prenom = htmlspecialchars($_POST['prenom'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');

            // Hashage du mot de passe (utilisez une méthode sécurisée comme password_hash())
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $userData = [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => filter_var($email, FILTER_VALIDATE_EMAIL),
                'password' => $hashedPassword,
                'photo' => $photoPath,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $result = $user->create($userData);
            $roles = $this->roleModel->all();
            $role_id = $roles[1]->id;
            $users = $this->userModel->all();
            $user_id = $users[0]->id;
//            var_dump($users);die();
            $userRole = ['role_id' => $role_id, 'user_id' => $user_id];
            $this->userRole->create($userRole);


        }
        return header('Location: /admin/dashboard/users');
    }
    private function handleUploadedPhoto(): ?string
    {
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {

            $uploadDir = __DIR__.'/../../../public/pictures/users/';
            // Assurez-vous que le répertoire de destination existe, sinon creer le
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $uploadFile = $uploadDir . basename($_FILES['photo']['name']);
//            var_dump($uploadFile);die();
            // Déplacez le fichier téléchargé vers le répertoire d'images
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
                $relativeFilePath = 'pictures/users/' . basename($_FILES['photo']['name']);
                return $relativeFilePath;
            } else {
                // Gestion de l'erreur d'enregistrement de l'image
                echo "Erreur lors de l'enregistrement de l'image.";
            }
        }

        return null;
    }

    public function edit(int $id){
      $this->requireAdmin();

        $user = (new User($this->getDB()))->findById($id);

//        var_dump($user);

        return $this->view('admin.users.edit', compact('user'));
    }

    public function update(int $id){
      $this->requireAdmin();
        $user = new User($this->getDB());

        // Traitement de l'image téléchargée
        $photoPath = $this->handleUploadedPhoto();

        if ($photoPath !== null){
            // Récupération et échappement des données du formulaire
            $nom = htmlspecialchars($_POST['nom'] ?? '');
            $prenom = htmlspecialchars($_POST['prenom'] ?? '');
            $email = htmlspecialchars($_POST['email'] ?? '');
            $password = htmlspecialchars($_POST['password'] ?? '');

            // Hashage du mot de passe (utilisez une méthode sécurisée comme password_hash())
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $userData = [
                'nom' => $nom,
                'prenom' => $prenom,
                'email' => filter_var($email, FILTER_VALIDATE_EMAIL),
                'password' => $hashedPassword,
                'photo' => $photoPath,
                'updated_at' => date('Y-m-d H:i:s'),
            ];

            $result = $user->update($id, $userData);
        }
        return header('Location: /admin/dashboard/users');

    }

    public function show(int $id){
        $this->requireAdmin();

        $user = (new User($this->getDB()))->findById($id);
//        var_dump($user);die();

        return $this->view('admin.users.show', compact('user'));
    }


    public function destroy(int $id){
        $this->requireAdmin();

        $user = (new User($this->getDB()))->findById($id);

        $result = $user->destroy($id);

        if ($result){
            return header('Location: /admin/dashboard/users');
        }else{
            return header('Location: /admin/dashboard/users');
        }
    }
}