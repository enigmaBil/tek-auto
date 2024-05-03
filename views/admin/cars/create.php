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

            <form action="/admin/dashboard/cars/store" method="POST" enctype="multipart/form-data" class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Marque: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="marque" value="" placeholder="Entrer la marque de la voiture">

                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Modele: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="modele" value="" placeholder="Entrer le modele de la voiture">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Immatriculation: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="immatriculation" value="" placeholder="Entrer l'immatriculation de la voiture">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <label class="form-control-label">Categorie: <span class="tx-danger">*</span></label>
                        <select name="categorie" class="form-control">
                            <option label="Choisir une categorie" hidden="hidden"></option>
                            <option value="citadine">Citadine</option>
                            <option value="berline">Berline</option>
                            <option value="suv">SUV </option>
                            <option value="coupé">Coupé</option>
                            <option value="cabriolet">Cabriolet</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Prix: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" min="100" name="prix" value="" placeholder="Entrer le prix de location de la voiture">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option label="Choisir..."></option>
                                <option value="disponible">Disponible</option>
                                <option value="occupée">Occupée</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <textarea rows="3" name="description" class="form-control" placeholder="Description de la voiture"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">image: <span class="tx-danger">*</span></label>
                            <input type="file" name="photo" id="file" accept="image/*" class="form-control">
                        </div>
                    </div>
                </div><!-- row -->

                <div class="form-layout-footer">
                    <input type="submit" value="Enregistrer" class="btn btn-info mg-r-5"/>
                    <input type="reset" value="Annuler" class="btn btn-secondary mg-r-5"/>
                    <a href="/admin/dashboard/cars" class="btn btn-primary  mg-r-5"><i class="fa fa-close mg-r-10"></i>Fermer</a>

                </div><!-- form-layout-footer -->
            </form><!-- form-layout -->
        </div>
    </div>



<?php
require_once __DIR__ . '/../includes/footer.php';
?>
