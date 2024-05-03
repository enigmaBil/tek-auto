<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';


?>


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <a class="breadcrumb-item" href="/admin/dashboard/cars">Gestion des voitures</a>
        <span class="breadcrumb-item active">Formulaire de mise a jour</span>
    </nav>

    <div class="sl-pagebody d-flex justify-content-center">
        <div class="card pd-20 pd-sm-40 w-75">
            <h6 class="card-body-title">Mise a jour de la <?= strtoupper($params['car']->marque) ?> - <?= strtoupper($params['car']->modele) ?></h6>
            <p class="mg-b-20 mg-sm-b-30">Veillez remplir tous les champs obligatoires marque avec (<span class="tx-danger">*</span>).</p>

            <form action="/admin/dashboard/cars/update/<?= strtoupper($params['car']->id) ?>" method="POST" enctype="multipart/form-data" class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Marque: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="marque" value="<?= $params['car']->marque ?>" placeholder="Entrer la marque de la voiture">

                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Modele: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="modele" value="<?= $params['car']->modele ?>" placeholder="Entrer le modele de la voiture">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Immatriculation: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="immatriculation" value="<?= $params['car']->immatriculation ?>" placeholder="Entrer l'immatriculation de la voiture">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <label class="form-control-label">Categorie: <span class="tx-danger">*</span></label>
                        <select name="categorie" class="form-control">
                            <option value="citadine" <?= ($params['car']->categorie === 'citadine') ? 'selected' : '' ?>>Citadine</option>
                            <option value="berline" <?= ($params['car']->categorie === 'berline') ? 'selected' : '' ?>>Berline</option>
                            <option value="suv" <?= ($params['car']->categorie === 'suv') ? 'selected' : '' ?>>SUV</option>
                            <option value="coupé" <?= ($params['car']->categorie === 'coupé') ? 'selected' : '' ?>>Coupé</option>
                            <option value="cabriolet" <?= ($params['car']->categorie === 'cabriolet') ? 'selected' : '' ?>>Cabriolet</option>
                        </select>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Prix: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="number" min="100" name="prix" value="<?= $params['car']->prix ?>" placeholder="Entrer le prix de location de la voiture">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mg-b-10-force">
                            <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="disponible" <?= ($params['car']->status === 'disponible') ? 'selected' : '' ?>>Disponible</option>
                                <option value="occupée" <?= ($params['car']->status === 'occupée') ? 'selected' : '' ?>>Occupée</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                            <textarea rows="3" name="description" class="form-control" placeholder="Description de la voiture"><?= $params['car']->description ?></textarea>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                            <input type="file" name="photo" value="<?= $params['car']->prix ?>" id="file" accept="image/*" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <img src="<?= SCRIPTS ?>/<?= $params['car']->photo ?>" class="img-thumbnail w-75" alt="Photo actuelle">
                        </div>
                    </div><!-- col-6 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <input type="submit" value="Modifier" class="btn btn-info mg-r-5"/>
                    <a href="/admin/dashboard/cars" class="btn btn-primary  mg-r-5"><i class="fa fa-close mg-r-10"></i>Fermer</a>
                </div><!-- form-layout-footer -->
            </form><!-- form-layout -->
        </div>
    </div>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
