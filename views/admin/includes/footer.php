<footer class="sl-footer">
    <div class="footer-left">
        <div class="mg-b-2">Copyright &copy; <script>document.write(new Date().getFullYear());</script>. Tek-Auto. Tous Droits Reservés.</div>

    </div>
    <div class="footer-right d-flex align-items-center">
        <span class="tx-uppercase mg-r-10">Partager:</span>
        <a target="_blank" class="pd-x-5" href="#"><i class="fa fa-facebook tx-20"></i></a>
        <a target="_blank" class="pd-x-5" href="#"><i class="fa fa-twitter tx-20"></i></a>
    </div>
</footer>
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script type="application/javascript">
    function validateUsersForm() {
        const nom = document.getElementById('nom').value.trim();
        const prenom = document.getElementById('prenom').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const confirmPassword = document.getElementById('confirmPassword').value.trim();
        const photo = document.getElementById('photo').value.trim();

        const nomError = document.getElementById('nomError');
        const prenomError = document.getElementById('prenomError');
        const emailError = document.getElementById('emailError');
        const passwordError = document.getElementById('passwordError');
        const confirmPasswordError = document.getElementById('confirmPasswordError');
        const photoError = document.getElementById('photoError');

        // Réinitialiser les messages d'erreur et les styles
        nomError.textContent = '';
        prenomError.textContent = '';
        emailError.textContent = '';
        passwordError.textContent = '';
        confirmPasswordError.textContent = '';
        photoError.textContent = '';

        document.getElementById("nom").classList.remove("is-invalid");
        document.getElementById("prenom").classList.remove("is-invalid");
        document.getElementById("email").classList.remove("is-invalid");
        document.getElementById("password").classList.remove("is-invalid");
        document.getElementById("confirmPassword").classList.remove("is-invalid");
        document.getElementById("photo").classList.remove("is-invalid");

        let isValid = true;

        // Vérifier les champs obligatoires
        if (nom === '') {
            nomError.textContent = 'Veuillez entrer votre nom.';
            document.getElementById("nom").classList.add("is-invalid");
            isValid = false;
        }

        if (prenom === '') {
            prenomError.textContent = 'Veuillez entrer votre prénom.';
            document.getElementById("prenom").classList.add("is-invalid");
            isValid = false;
        }

        if (email === '') {
            emailError.textContent = 'Veuillez entrer votre adresse email.';
            document.getElementById("email").classList.add("is-invalid");
            isValid = false;
        }

        if (password === '') {
            passwordError.textContent = 'Veuillez entrer votre mot de passe.';
            document.getElementById("password").classList.add("is-invalid");
            isValid = false;
        }

        if (confirmPassword === '') {
            confirmPasswordError.textContent = 'Veuillez confirmer votre mot de passe.';
            document.getElementById("confirmPassword").classList.add("is-invalid");
            isValid = false;
        }

        if (password !== confirmPassword) {
            confirmPasswordError.textContent = 'Les mots de passe ne correspondent pas.';
            document.getElementById("confirmPassword").classList.add("is-invalid");
            isValid = false;
        }

        if (photo === '') {
            photoError.textContent = 'Veuillez sélectionner une photo de profil.';
            document.getElementById("photo").classList.add("is-invalid");
            isValid = false;
        }

        return isValid; // Soumission du formulaire si la validation est réussie
    }
    function validateCarsForm() {
        const marque = document.getElementById('marque').value.trim();
        const modele = document.getElementById('modele').value.trim();
        const immatriculation = document.getElementById('immatriculation').value.trim();
        const categorie = document.getElementById('categorie').value.trim();
        const prix = document.getElementById('prix').value.trim();
        const statut = document.getElementById('statut').value.trim();
        const description = document.getElementById('description').value.trim();
        const photo = document.getElementById('photo').value.trim();

        const marqueError = document.getElementById('marqueError');
        const modeleError = document.getElementById('modeleError');
        const immatriculationError = document.getElementById('immatriculationError');
        const categorieError = document.getElementById('categorieError');
        const prixError = document.getElementById('prixError');
        const statutError = document.getElementById('statutError');
        const descriptionError = document.getElementById('descriptionError');
        const photoError = document.getElementById('photoError');

        // Réinitialiser les messages d'erreur et les styles
        marqueError.textContent = '';
        modeleError.textContent = '';
        immatriculationError.textContent = '';
        categorieError.textContent = '';
        prixError.textContent = '';
        statutError.textContent = '';
        descriptionError.textContent = '';
        photoError.textContent = '';

        document.getElementById("marque").classList.remove("is-invalid");
        document.getElementById("modele").classList.remove("is-invalid");
        document.getElementById("immatriculation").classList.remove("is-invalid");
        document.getElementById("categorie").classList.remove("is-invalid");
        document.getElementById("prix").classList.remove("is-invalid");
        document.getElementById("statut").classList.remove("is-invalid");
        document.getElementById("description").classList.remove("is-invalid");
        document.getElementById("photo").classList.remove("is-invalid");

        let isValid = true;

        // Vérifier les champs obligatoires
        if (marque === '') {
            marqueError.textContent = 'Veuillez entrer la marque de la voiture.';
            document.getElementById("marque").classList.add("is-invalid");
            isValid = false;
        }

        if (modele === '') {
            modeleError.textContent = 'Veuillez entrer le modèle de la voiture.';
            document.getElementById("modele").classList.add("is-invalid");
            isValid = false;
        }

        if (immatriculation === '') {
            immatriculationError.textContent = 'Veuillez entrer l\'immatriculation de la voiture.';
            document.getElementById("immatriculation").classList.add("is-invalid");
            isValid = false;
        }

        if (categorie === '') {
            categorieError.textContent = 'Veuillez sélectionner la catégorie de la voiture.';
            document.getElementById("categorie").classList.add("is-invalid");
            isValid = false;
        }

        if (prix === '') {
            prixError.textContent = 'Veuillez entrer le prix de location de la voiture.';
            document.getElementById("prix").classList.add("is-invalid");
            isValid = false;
        }

        if (statut === '') {
            statutError.textContent = 'Veuillez sélectionner le statut de la voiture.';
            document.getElementById("statut").classList.add("is-invalid");
            isValid = false;
        }

        if (description === '') {
            descriptionError.textContent = 'Veuillez entrer une description de la voiture.';
            document.getElementById("description").classList.add("is-invalid");
            isValid = false;
        }

        if (photo === '') {
            photoError.textContent = 'Veuillez sélectionner une photo de la voiture.';
            document.getElementById("photo").classList.add("is-invalid");
            isValid = false;
        }

        return isValid;
    }
</script>

<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery' . DIRECTORY_SEPARATOR . 'jquery.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'popper.js' . DIRECTORY_SEPARATOR . 'popper.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery-ui' . DIRECTORY_SEPARATOR . 'jquery-ui.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'perfect-scrollbar' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'perfect-scrollbar.jquery.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'select2' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'select2.min.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'jquery.sparkline.bower' . DIRECTORY_SEPARATOR . 'jquery.sparkline.min.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'd3' . DIRECTORY_SEPARATOR . 'd3.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'rickshaw' . DIRECTORY_SEPARATOR . 'rickshaw.min.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'chart.js' . DIRECTORY_SEPARATOR . 'Chart.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Flot' . DIRECTORY_SEPARATOR . 'jquery.flot.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Flot' . DIRECTORY_SEPARATOR . 'jquery.flot.pie.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'Flot' . DIRECTORY_SEPARATOR . 'jquery.flot.resize.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'flot-spline' . DIRECTORY_SEPARATOR . 'jquery.flot.spline.js'?>"></script>



<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'starlight.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'ResizeSensor.js'?>"></script>
<script src="<?= SCRIPTS . 'backend' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . 'dashboard.js'?>"></script>


</body>
</html>
