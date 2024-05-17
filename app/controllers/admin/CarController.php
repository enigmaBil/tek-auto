<?php

namespace App\controllers\admin;


use App\controllers\Controller;
use App\models\Car;

class CarController extends Controller
{
    public  function index()
    {
//        $this->requireAdmin();

        $cars = (new Car($this->getDB()))->all();

//        var_dump($cars);die();

        return $this->view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
//        $this->requireAdmin();

        return $this->view('admin.cars.create');
    }

    public function store()
    {
//        $this->requireAdmin();

        $car = new  Car($this->getDB());

        // Traitement de l'image téléchargée
        $photoPath = $this->handleUploadedPhoto();

//        var_dump($photoPath);die();
        if ($photoPath !== null){
            $carData = [
                'marque' => htmlspecialchars($_POST['marque']) ?? '',
                'modele' => htmlspecialchars($_POST['modele']) ?? '',
                'immatriculation' => htmlspecialchars($_POST['immatriculation']) ?? '',
                'categorie' => htmlspecialchars($_POST['categorie']) ?? '',
                'prix' => htmlspecialchars($_POST['prix']) ?? 0,
                'status' => htmlspecialchars($_POST['status'])?? '',
                'description' => htmlspecialchars($_POST['description']) ?? '',
                'photo' => $photoPath,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];


            $result = $car->create($carData);

        }
        return header('Location: /admin/dashboard/cars');
    }

    private function handleUploadedPhoto(): ?string
    {
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {

            $uploadDir = __DIR__.'/../../../public/pictures/cars/';
            // Assurez-vous que le répertoire de destination existe, sinon creer le
            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $uploadFile = $uploadDir . basename($_FILES['photo']['name']);
//            var_dump($uploadFile);die();
            // Déplacez le fichier téléchargé vers le répertoire d'images
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
                $relativeFilePath = 'pictures/cars/' . basename($_FILES['photo']['name']);
                return $relativeFilePath;
            } else {
                // Gestion de l'erreur d'enregistrement de l'image
                echo "Erreur lors de l'enregistrement de l'image.";
            }
        }

        return null;
    }

    public function edit(int $id)
    {
//        $this->requireAdmin();

        $car = (new Car($this->getDB()))->findById($id);

//        var_dump($car); die();

        return $this->view('admin.cars.edit', compact('car'));
    }

    public function update(int $id){
//        $this->requireAdmin();

        $car = new Car($this->getDB());

        // Traitement de l'image téléchargée
        $photoPath = $this->handleUploadedPhoto();

        if ($photoPath !== null){
            $carUpdatedData = [
                'marque' => htmlspecialchars($_POST['marque']) ?? '',
                'modele' => htmlspecialchars($_POST['modele']) ?? '',
                'immatriculation' => htmlspecialchars($_POST['immatriculation']) ?? '',
                'categorie' => htmlspecialchars($_POST['categorie']) ?? '',
                'prix' => htmlspecialchars($_POST['prix']) ?? 0,
                'status' => htmlspecialchars($_POST['status'])?? '',
                'description' => htmlspecialchars($_POST['description']) ?? '',
                'photo' => $photoPath,
                'updated_at' => date('Y-m-d H:i:s'),
            ];


            $car->update($id, $carUpdatedData);
        }

        return header('Location: /admin/dashboard/cars');
    }

    public function show(int $id){
//        $this->requireAdmin();

        $car = (new Car($this->getDB()))->findById($id);
//        var_dump($car);die();

        return $this->view('admin.cars.show', compact('car'));
    }

    public function destroy(int $id){
//        $this->requireAdmin();

        $car = (new Car($this->getDB()))->findById($id);

        $result = $car->destroy($id);

        if ($result){
            return header('Location: /admin/dashboard/cars');
        }else{
            return header('Location: /admin/dashboard/cars');
        }
    }
}