<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tek-Auto | Login</title>

    <!-- vendor css -->
    <link href="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'font-awesome' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'font-awesome.css'?>" rel="stylesheet">
    <link href="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Ionicons' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'ionicons.css'?>" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'starlight.css'?>">
</head>

<body style="background-image: url('<?= SCRIPTS ?>/images/hero_1_a.jpg');">

<div class="d-flex align-items-center justify-content-center  ht-100v">

    <div class="login-wrapper wd-300 wd-xs-450 pd-25 pd-xs-40 bg-white-5" >
        <div class="signin-logo tx-center tx-50 tx-lg-bold tx-inverse">Tek<span class="tx-info tx-lg-bold">-Auto</span></div>
        <div class="tx-center mg-b-40">Application de location de voitures</div>

        <form action="" method="post" data-parsley-validate>
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-email tx-16 lh-0 op-6"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Entrer votre adresse email" required/>
            </div><!-- form-group -->
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-locked tx-16 lh-0 op-6"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe" required/>
            </div>
<!--            <a href="/reset" class="tx-info tx-12 d-block mg-t-10 mb-2">Forgot password?</a>-->
            <button type="submit" class="btn btn-info btn-block">Se Connecter</button>
        </form>
        <div class="mg-t-40 tx-center">Vous n'avez pas un compte? <a href="/register" class="tx-info">Inscrivez-vous</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery' . DIRECTORY_SEPARATOR . 'jquery.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'popper.js' . DIRECTORY_SEPARATOR . 'popper.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.js'?>"></script>

</body>
</html>
