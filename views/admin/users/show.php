<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <a class="breadcrumb-item" href="/admin/dashboard/cars">Gestion des utilisateurs</a>
        <span class="breadcrumb-item active">Profil des gestionnaires</span>
    </nav>


    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Profil</h6>
            <p class="mg-b-20 mg-sm-b-30">Fiche descriptive du gestionnaire.</p>
            <div class="row row-sm ">
                <div class="col-lg-2 ">
                    <img src="<?= SCRIPTS ?>/<?= $params['user']->photo ?>" class="img-thumbnail rounded-circle " alt="Photo actuelle">
                </div>
                <div class="col-lg-8 border-primary">
                    <div class="br-profile-page">
                        <div class="list-group mb-5">
                            <p class="list-group-item">
                                <span >Nom: </span><span><?= $params['user']->nom ?></span>
                            </p>
                            <p class="list-group-item">
                                <span >Prenom: </span><span><?= $params['user']->prenom ?></span>
                            </p>
                            <p class="list-group-item">
                                <span >Email: </span><span><?= $params['user']->email ?></span>
                            </p>
                            <p class="list-group-item">
                                <span >Code client: </span>
                                <?php if ($params['user']->code_client !== null): ?>
                                    <?= $params['user']->code_client ?>
                                <?php else: ?>
                                    <span class="text-center">Non defini</span>
                                <?php endif ?>
                            </p>
                        </div>
                        <div class="row row-sm ">
                            <div class="col-xl-2">
                                <a href="/admin/dashboard/users" class="btn btn-primary btn-block mg-b-10"><i class="fa fa-close mg-r-10"></i>Fermer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
