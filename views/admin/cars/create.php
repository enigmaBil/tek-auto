<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <a class="breadcrumb-item" href="/admin/dashboard/cars">Gestion des voitures</a>
        <span class="breadcrumb-item active">Formulaire de creation des voitures</span>
    </nav>

    <div class="sl-pagebody d-flex justify-content-center">
        <div class="card pd-20 pd-sm-40 w-75">
            <h6 class="card-body-title">Formulaire de creation des voitures</h6>
            <p class="mg-b-20 mg-sm-b-30">Veillez remplir tous les champs obligatoires marque avec (<span class="tx-danger">*</span>).</p>

            <form action="/admin/dashboard/cars/store" method="POST" enctype="multipart/form-data" class="form-layout" onsubmit="return validateCarsForm()">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Marque: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="marque" name="marque" value="" placeholder="Entrez la marque de la voiture">
                            <span id="marqueError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Modèle: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="modele" name="modele" value="" placeholder="Entrez le modèle de la voiture">
                            <span id="modeleError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Immatriculation: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="immatriculation" name="immatriculation" value="" placeholder="Entrez l'immatriculation de la voiture">
                            <span id="immatriculationError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Catégorie: <span class="tx-danger">*</span></label>
                            <select class="form-control" id="categorie" name="categorie">
                                <option value="" hidden>Choisir une catégorie</option>
                                <option value="citadine">Citadine</option>
                                <option value="berline">Berline</option>
                                <option value="suv">SUV</option>
                                <option value="coupé">Coupé</option>
                                <option value="cabriolet">Cabriolet</option>
                            </select>
                            <span id="categorieError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Prix: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" id="prix" name="prix" value="" placeholder="Entrez le prix de location de la voiture">
                            <span id="prixError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Statut: <span class="tx-danger">*</span></label>
                            <select class="form-control" id="statut" name="statut">
                                <option value="" hidden>Choisir le statut</option>
                                <option value="disponible">Disponible</option>
                                <option value="occupée">Occupée</option>
                            </select>
                            <span id="statutError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description de la voiture"></textarea>
                            <span id="descriptionError" class="invalid-feedback"></span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
                            <span id="photoError" class="invalid-feedback"></span>
                        </div>
                    </div>
                </div>

                <div class="form-layout-footer">
                    <button type="submit" class="btn btn-info mg-r-5">Enregistrer</button>
                    <input type="reset" value="Annuler" class="btn btn-secondary mg-r-5"/>
                    <a href="/admin/dashboard/cars" class="btn btn-primary mg-r-5"><i class="fa fa-close mg-r-10"></i>Fermer</a>
                </div>
            </form>
        </div>
    </div>



<?php
require_once __DIR__ . '/../includes/footer.php';
?>
