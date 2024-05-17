<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <a class="breadcrumb-item" href="/admin/dashboard/cars">Gestion des utilisateurs</a>
        <span class="breadcrumb-item active">Formulaire de creation des gestionnaires</span>
    </nav>

    <div class="sl-pagebody d-flex justify-content-center">
        <div class="card pd-20 pd-sm-40 w-75">
            <h6 class="card-body-title">Formulaire de creation des gestionnaires</h6>
            <p class="mg-b-20 mg-sm-b-30">Veillez remplir tous les champs obligatoires marque avec (<span class="tx-danger">*</span>).</p>

            <form action="/admin/dashboard/users/store" method="POST" enctype="multipart/form-data" class="form-layout" onsubmit="return validateUsersForm()">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Nom: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="nom" name="nom" value="" placeholder="Entrer le nom">
                            <span id="nomError" class="invalid-feedback"></span>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Prénom: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" id="prenom" name="prenom" value="" placeholder="Entrer le prénom">
                            <span id="prenomError" class="invalid-feedback"></span>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="email" id="email" name="email" value="" placeholder="Entrer l'adresse email">
                            <span id="emailError" class="invalid-feedback"></span>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Mot de passe: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="password" id="password" name="password" value="" placeholder="Entrer le mot de passe">
                            <span id="passwordError" class="invalid-feedback"></span>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Confirmer le mot de passe: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" value="" placeholder="Confirmer le mot de passe">
                            <span id="confirmPasswordError" class="invalid-feedback"></span>
                        </div>
                    </div><!-- col-6 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                            <input type="file" id="photo" name="photo" accept="image/*" class="form-control">
                            <div class="invalid-feedback" id="photoError"></div>
                        </div>
                    </div><!-- col-6 -->
                </div><!-- row -->

                <div class="form-layout-footer">
<!--                    <input type="submit" value="" class=""/>-->
                    <button type="submit" class="btn btn-info mg-r-5">Enregistrer</button>
                    <input type="reset" value="Annuler" class="btn btn-secondary mg-r-5"/>
                    <a href="/admin/dashboard/users" class="btn btn-primary mg-r-5"><i class="fa fa-close mg-r-10"></i>Fermer</a>
                </div><!-- form-layout-footer -->
            </form>

        </div>
    </div>


<?php
require_once __DIR__ . '/../includes/footer.php';
?>


