<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <span class="breadcrumb-item active">Gestion des factures</span>

    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Gestion des factures</h6>
            <p class="mg-b-20 mg-sm-b-30">Liste des factures.</p>

            <div class="table-responsive">
                <?php if (isset($params['bills']) && !empty($params['bills'])): ?>
                <table class="table table-hover table-bordered mg-b-0">
                    <thead class="bg-info">
                    <tr>
                        <th>ID_facture</th>
                        <th>Date</th>
                        <th>Montant</th>
                        <th>Client</th>
                        <th>Voiture</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Bmw</td>
                        <td>coupe</td>
                        <td>hgrt-64</td>
                        <td>Pickup</td>
                        <td>Pickup</td>
                        <td>
                            <a href="" title="Mettre a jour"><i class="menu-item-icon fa fa-pencil tx-2 tx-dark"></i></a>
                            <a href="" title="Voir les details"><i class="menu-item-icon fa fa-eye tx-2 tx-gray-900"></i></a>
                            <a href="" title="Supprimer"><i class="menu-item-icon fa fa-trash tx-2 tx-danger"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>Bmw</td>
                        <td>coupe</td>
                        <td>hgrt-64</td>
                        <td>Pickup</td>
                        <td>Pickup</td>
                        <td>
                            <a href="" title="Mettre a jour"><i class="menu-item-icon fa fa-pencil tx-2 tx-dark"></i></a>
                            <a href="" title="Voir les details"><i class="menu-item-icon fa fa-eye tx-2 tx-gray-900"></i></a>
                            <a href="" title="Supprimer"><i class="menu-item-icon fa fa-trash tx-2 tx-danger"></i></a>
                        </td>
                    </tr>
                    <?php else: ?>
                    <p class="text-primary">Aucune Facture n'est disponible pour le moment</p>
                    <?php endif ?>
                    </tbody>
                </table>
            </div><!-- table-responsive -->

        </div>
    </div>



<?php
require_once __DIR__ . '/../includes/footer.php';
?>
