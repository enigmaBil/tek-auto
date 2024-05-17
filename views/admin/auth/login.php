<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Balises meta requises -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tek-Auto | Connexion</title>

    <!-- CSS des fournisseurs -->
    <link href="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'font-awesome' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'font-awesome.css'?>" rel="stylesheet">
    <link href="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Ionicons' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'ionicons.css'?>" rel="stylesheet">

    <!-- CSS de Starlight -->
    <link rel="stylesheet" href="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'starlight.css'?>">
</head>

<body style="background-image: url('<?= SCRIPTS ?>/images/hero_1_a.jpg');">

<div class="d-flex align-items-center justify-content-center  ht-100v">
    <div class="login-wrapper wd-300 wd-xs-450 pd-25 pd-xs-40 bg-white-5">
        <div class="signin-logo tx-center tx-50 tx-lg-bold tx-inverse">Tek<span class="tx-info tx-lg-bold">-Auto</span></div>
        <div class="tx-center mg-b-40">Application de Location de Voitures</div>
        <?php if (isset($_SESSION['errors'])): ?>

            <div class="alert alert-danger">
                <?php foreach($_SESSION['errors'] as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach ?>
            </div>

        <?php endif ?>
        <?php session_destroy(); ?>
        <form action="/admin/login" method="post" onsubmit="return validateForm()">
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-email tx-16 lh-0 op-6"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse email">

            </div>
            <span id="emailError" class="invalid-feedback"></span>
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-locked tx-16 lh-0 op-6"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">

            </div>
            <span id="passwordError" class="invalid-feedback"></span>
            <button type="submit" class="btn btn-info btn-block mt-2">Se connecter</button>
        </form>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery' . DIRECTORY_SEPARATOR . 'jquery.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'popper.js' . DIRECTORY_SEPARATOR . 'popper.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.js'?>"></script>
<script>
    function validateForm() {
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const emailError = document.getElementById("emailError");
        const passwordError = document.getElementById("passwordError");
        let isValid = true;

        // Réinitialiser les messages d'erreur et les classes Bootstrap
        emailError.textContent = "";
        passwordError.textContent = "";
        document.getElementById("email").classList.remove("is-invalid");
        document.getElementById("password").classList.remove("is-invalid");

        // Vérifier si l'adresse email est vide
        if (email === "") {
            emailError.textContent = "Veuillez entrer votre adresse email.";
            document.getElementById("email").classList.add("is-invalid");
            document.getElementById("emailError").style.display = "block";
            isValid = false;
        }

        // Vérifier si le mot de passe est vide
        if (password === "") {
            passwordError.textContent = "Veuillez entrer votre mot de passe.";
            document.getElementById("password").classList.add("is-invalid");
            document.getElementById("passwordError").style.display = "block";
            isValid = false;
        }

        return isValid; // Soumission du formulaire si la validation est réussie
    }
</script>
</body>
</html>
