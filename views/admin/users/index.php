<?php
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/sidebar.php';
require_once __DIR__ . '/../includes/navbar.php';
?>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/admin/dashboard">Tek-auto</a>
        <span class="breadcrumb-item active">Gestion des utilisateurs</span>

    </nav>

    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40 mg-t-50">
            <h6 class="card-body-title">Gestion des utilisateurs</h6>
            <p class="mg-b-20 mg-sm-b-30">Liste des utilisateurs.</p>
            <div class="row row-sm ">
                <div class="col-xl-2">
                    <a href="/admin/dashboard/users/create" class="btn btn-primary btn-block mg-b-10"><i class="fa fa-plus-square mg-r-10"></i>Ajouter</a>
                </div>
            </div>
            <div class="table-responsive">
                <?php if (isset($params['users']) && !empty($params['users'])): ?>
                <table class="table table-hover table-bordered mg-b-0">
                    <thead class="bg-info">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Email</th>
                        <th>Code_client</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($params['users'] as $user): ?>
                    <tr>
                        <td><?=$user->nom ?></td>
                        <td><?=$user->prenom ?></td>
                        <td><?=$user->email ?></td>
                        <td>
                            <?php if ($user->code_client !== null): ?>
                                <?= $user->code_client ?>
                            <?php else: ?>
                                <span class="text-center">Non defini</span>
                            <?php endif ?>
                        </td>
                        <td><img src="<?= SCRIPTS ?>/<?=$user->photo ?>" class="wd-xs-40 rounded-circle" alt=""></td>
                        <td>
                            <?php if ($user->code_client === null): ?>
                                <a href="/admin/dashboard/users/edit/<?= $user->id ?>" title="Mettre à jour"><i class="menu-item-icon fa fa-pencil tx-2 tx-dark"></i></a>
                            <?php endif ?>
                            <a href="/admin/dashboard/users/show/<?= $user->id ?>" title="Voir les details"><i class="menu-item-icon fa fa-eye tx-2 tx-gray-900"></i></a>
                            <form class="d-inline" action="/admin/dashboard/users/delete/<?= $user->id ?>" method="POST">
                                <button title="Supprimer" type="submit" style="border: none; background: transparent; outline: none; cursor: pointer">
                                    <i class="menu-item-icon fa fa-trash tx-2 tx-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    <?php else: ?>
                        <p>Aucun utilisateur n'est disponible actuellement</p>
                    <?php endif ?>
                    </tbody>
                </table>
            </div><!-- table-responsive -->

        </div>
    </div>



<?php
require_once __DIR__ . '/../includes/footer.php';
?>
