<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
            <a class="breadcrumb-item" href="/admin/dashboard/cars">Gestion des utilisateurs</a>
            <span class="breadcrumb-item active">Formulaire de mise a jour  des gestionnaires</span>
        </nav>

        <div class="sl-pagebody d-flex justify-content-center">
            <div class="card pd-20 pd-sm-40 w-75">
                <h6 class="card-body-title">Edition de profil du gestionnaire:  <?= $params['user']->prenom ?> <?= $params['user']->nom ?></h6>
                <p class="mg-b-20 mg-sm-b-30">Veillez remplir tous les champs obligatoires marque avec (<span class="tx-danger">*</span>).</p>

                <form action="/admin/dashboard/users/update/<?= $params['user']->id ?>" method="POST" enctype="multipart/form-data" class="form-layout" onsubmit="return validateUsersForm()">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Nom: <span class="tx-danger">*</span></label>
                                <input class="form-control" id="nom" type="text" name="nom" value="<?= $params['user']->nom ?>" placeholder="Entrer le nom">
                                <span id="nomError" class="invalid-feedback"></span>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Prénom: <span class="tx-danger">*</span></label>
                                <input class="form-control" id="prenom" type="text" name="prenom" value="<?= $params['user']->prenom ?>" placeholder="Entrer le prénom">
                                <span id="prenomError" class="invalid-feedback"></span>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input class="form-control" id="email" type="email" name="email" value="<?= $params['user']->email ?>" placeholder="Entrer l'adresse email">
                                <span id="emailError" class="invalid-feedback"></span>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <label class="form-control-label">Mot de passe: <span class="tx-danger">*</span></label>
                            <input class="form-control" id="password" type="password" name="password" value="" placeholder="Entrer le mot de passe">
                            <span id="passwordError" class="invalid-feedback"></span>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Confirmer le mot de passe: <span class="tx-danger">*</span></label>
                                <input class="form-control" id="confirmPassword" type="password" name="" value="" placeholder="Confirmer le mot de passe">
                                <span id="confirmPasswordError" class="invalid-feedback"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">image: <span class="tx-danger">*</span></label>
                                <input type="file" name="photo" id="photo" accept="image/*" class="form-control">
                                <div class="invalid-feedback" id="photoError"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="<?= SCRIPTS ?>/<?= $params['user']->photo ?>" class="img-thumbnail w-25" alt="Photo actuelle">
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info mg-r-5">Modifier</button>
                        <a href="/admin/dashboard/users" class="btn btn-primary  mg-r-5"><i class="fa fa-close mg-r-10"></i>Fermer</a>
                    </div><!-- form-layout-footer -->
                </form><!-- form-layout -->
            </div>
        </div>



<?php
require_once __DIR__ . '/../includes/footer.php';
?>