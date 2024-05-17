<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>
<?php
    function getStatusBadgeClass($status)
    {
        return $status === 'disponible' ? 'badge-success' : 'badge-danger';
    }
?>
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
            <a class="breadcrumb-item" href="/admin/dashboard/cars">Gestion des voitures</a>
            <span class="breadcrumb-item active">Detail de la voiture</span>
        </nav>
        <div class="sl-pagebody">

            <div class="card pd-20 pd-sm-40 mg-t-50">
                <h6 class="card-body-title">Gestion des voitures</h6>
                <p class="mg-b-20 mg-sm-b-30">Fiche descriptive de la  <?= $params['car']->modele ?>.</p>
                <div class="row row-sm ">
                <div class="col-lg-4">
                    <div class="form-group">
                        <img src="<?= SCRIPTS ?>/<?= $params['car']->photo ?>" class="img-thumbnail" alt="Photo actuelle">
                    </div>
                </div>
                <div class="col-lg-8 border-primary">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mg-b-0">
                                <thead class="bg-info">
                                <tr>
                                    <th>Marque</th>
                                    <th>Modele</th>
                                    <th>Immatriculation</th>
                                    <th>Categorie</th>
                                    <th>Pix </th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><?= $params['car']->marque ?></td>
                                        <td><?= $params['car']->modele ?></td>
                                        <td><?= $params['car']->immatriculation ?></td>
                                        <td><?= $params['car']->categorie ?></td>
                                        <td><?= $params['car']->prix ?></td>
                                        <td><span class="badge <?= getStatusBadgeClass( $params['car']->status) ?> tx-white tx-11"><?= $params['car']->status ?></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- table-responsive -->
                        <p>
                            <h3>Description: </h3>
                        <?= $params['car']->description ?>
                        </p>
                        <div class="row row-sm ">
                            <div class="col-xl-2">
                                <a href="/admin/dashboard/cars" class="btn btn-primary btn-block mg-b-10"><i class="fa fa-close mg-r-10"></i>Fermer</a>
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