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
        <div class="tx-center mg-b-40">Professional Car Rental Apps</div>

        <form action="" method="post">
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                <input type="text" class="form-control" placeholder="Enter your username">
            </div><!-- form-group -->
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-lock-combination tx-16 lh-0 op-6"></i></span>
                <input type="password" class="form-control" placeholder="Enter your password">
            </div><!-- form-group -->
            <a href="/reset" class="tx-info tx-12 d-block mg-t-10 mb-2">Forgot password?</a>
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
        </form>

    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery' . DIRECTORY_SEPARATOR . 'jquery.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'popper.js' . DIRECTORY_SEPARATOR . 'popper.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.js'?>"></script>

</body>
</html>
