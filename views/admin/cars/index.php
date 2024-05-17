<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <span class="breadcrumb-item active">Gestion des voitures</span>

    </nav>

    <div class="sl-pagebody">

        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Gestion des voitures</h6>
            <p class="mg-b-20 mg-sm-b-30">Liste des voitures.</p>
            <div class="row row-sm ">
                <div class="col-xl-2">
                    <a href="/admin/dashboard/cars/create" class="btn btn-primary btn-block mg-b-10"><i class="fa fa-plus-square mg-r-10"></i>Ajouter</a>
                </div>
            </div>
            <?php
            function getStatusBadgeClass($status)
            {
                return $status === 'disponible' ? 'badge-success' : 'badge-danger';
            }
            ?>
            <div class="table-responsive">
                <?php if (isset($params['cars']) && !empty($params['cars'])): ?>
                <table class="table table-hover table-bordered mg-b-0">
                    <thead class="bg-info">
                    <tr>
                        <th>Marque</th>
                        <th>Modele</th>
                        <th>Immatriculation</th>
                        <th>Categorie</th>
                        <th>Pix de location(dt)</th>
                        <th>Status</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>


                        <?php  foreach ($params['cars'] as $car): ?>
                            <tr>
                                <td><?= $car->marque ?></td>
                                <td><?= $car->modele ?></td>
                                <td><?= $car->immatriculation ?></td>
                                <td><?= $car->categorie ?></td>
                                <td><?= $car->prix ?></td>
                                <td><span class="badge <?= getStatusBadgeClass($car->status) ?> tx-white tx-11"><?= $car->status ?></span></td>
                                <td><?= substr($car->description, 0, 15).'...' ?></td>
                                <td><img src="<?= SCRIPTS ?>/<?= $car->photo?>" class="wd-xs-40 rounded-circle" alt=""></td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="/admin/dashboard/cars/edit/<?= $car->id ?>" title="Mettre a jour"><i class="menu-item-icon fa fa-pencil tx-2 tx-dark"></i></a>
                                        <a href="/admin/dashboard/cars/show/<?= $car->id ?>" title="Voir les details"><i class="menu-item-icon fa fa-eye tx-2 tx-gray-900"></i></a>
                                        <form class="d-inline" action="/admin/dashboard/cars/delete/<?= $car->id ?>" method="POST">
                                            <button title="Supprimer"  type="submit" style="border: none; background: transparent; outline: none; cursor: pointer">
                                                <i class="menu-item-icon fa fa-trash tx-2 tx-danger"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>Aucune voiture n'est disponible actuellement</p>
                    <?php endif ?>
                    </tbody>
                </table>
            </div><!-- table-responsive -->

        </div>
    </div>



<?php
require_once __DIR__ . '/../includes/footer.php';
?>
