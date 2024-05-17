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

    <div class="login-wrapper wd-300 wd-xs-450 pd-25 pd-xs-20 bg-white-5" >
        <div class="signin-logo tx-center tx-50 tx-lg-bold tx-inverse">Tek<span class="tx-info tx-lg-bold">-Auto</span></div>
        <div class="tx-center mg-b-20">Application de location de voitures</div>

        <form id="inscriptionForm" action="" method="post" onsubmit="return validateForm()">
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom">
            </div>
            <span id="nomError" class="invalid-feedback"></span>
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-person tx-16 lh-0 op-6"></i></span>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom">
            </div>
            <span id="prenomError" class="invalid-feedback"></span>
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
            <div class="input-group mb-2">
                <span class="input-group-addon"><i class="icon ion-locked tx-16 lh-0 op-6"></i></span>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmez votre mot de passe">
            </div>
            <span id="confirmPasswordError" class="invalid-feedback"></span>
            <button type="submit" class="btn btn-info btn-block mt-2">S'inscrire</button>
        </form>
        <div class="mg-t-20 tx-center">Vous avez deja un compte? <a href="/login" class="tx-info">Connectez-vous</a></div>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery' . DIRECTORY_SEPARATOR . 'jquery.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'popper.js' . DIRECTORY_SEPARATOR . 'popper.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.js'?>"></script>

<script>
    function validateForm() {
        const nom = document.getElementById("nom").value.trim();
        const prenom = document.getElementById("prenom").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmPassword").value;

        const nomError = document.getElementById("nomError");
        const prenomError = document.getElementById("prenomError");
        const emailError = document.getElementById("emailError");
        const passwordError = document.getElementById("passwordError");
        const confirmPasswordError = document.getElementById("confirmPasswordError");

        // Réinitialiser les messages d'erreur et les classes Bootstrap
        nomError.textContent = "";
        prenomError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";
        confirmPasswordError.textContent = "";

        document.getElementById("nom").classList.remove("is-invalid");
        document.getElementById("prenom").classList.remove("is-invalid");
        document.getElementById("email").classList.remove("is-invalid");
        document.getElementById("password").classList.remove("is-invalid");
        document.getElementById("confirmPassword").classList.remove("is-invalid");

        let isValid = true;

        // Vérifier le nom
        if (nom === "") {
            nomError.textContent = "Veuillez entrer votre nom.";
            document.getElementById("nom").classList.add("is-invalid");
            document.getElementById("nomError").style.display = "block";
            isValid = false;
        }

        // Vérifier le prénom
        if (prenom === "") {
            prenomError.textContent = "Veuillez entrer votre prénom.";
            document.getElementById("prenom").classList.add("is-invalid");
            document.getElementById("prenomError").style.display = "block";
            isValid = false;
        }

        // Vérifier l'adresse email
        if (email === "") {
            emailError.textContent = "Veuillez entrer votre adresse email.";
            document.getElementById("email").classList.add("is-invalid");
            document.getElementById("emailError").style.display = "block";
            isValid = false;
        }

        // Vérifier le mot de passe
        if (password === "") {
            passwordError.textContent = "Veuillez entrer votre mot de passe.";
            document.getElementById("password").classList.add("is-invalid");
            document.getElementById("passwordError").style.display = "block";
            isValid = false;
        }

        // Vérifier la confirmation du mot de passe
        if (confirmPassword === "") {
            confirmPasswordError.textContent = "Veuillez confirmer votre mot de passe.";
            document.getElementById("confirmPassword").classList.add("is-invalid");
            document.getElementById("confirmPasswordError").style.display = "block";
            isValid = false;
        } else if (password !== confirmPassword) {
            confirmPasswordError.textContent = "Les mots de passe ne correspondent pas.";
            document.getElementById("confirmPassword").classList.add("is-invalid");
            document.getElementById("confirmPasswordError").style.display = "block";
            isValid = false;
        }

        return isValid; // Soumission du formulaire si la validation est réussie
    }
</script>
</body>
</html>
