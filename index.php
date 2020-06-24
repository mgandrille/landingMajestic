<?php
session_start();
?>

<?php include 'partials/header.php' ; ?>

<main class="container-fluid px-0">
    <div class="row">
        <div id="photo" class="col-md-9 d-flex align-items-center">
            <div class="logo text-center mx-auto">
                <img src="assets/img/LogoMajestic.svg" alt="Logo graphique Majestic" class="m py-2">
                <img src="assets/img/TextMajestic.svg" alt="Logo texte Majestic" class="py-2">
            </div>
        </div>
        <div class="col-md-3 px-5 py-5 justify-content-center">
            <div class="my-4">

                <?php if (isset($_SESSION['form_error']) &&  $_SESSION['form_error'] === true) {
                    unset($_SESSION['form_error']) ?>
                    <p class="lead text-danger">Une erreur est survenue à l'envoi du formulaire.</p>
                <?php }
                if (isset($_SESSION['form_valid']) &&  $_SESSION['form_valid'] === true) {
                    unset($_SESSION['form_valid']) ?>
                    <p class="lead text-success">Votre inscription a bien été enregistrée !</p>
                <?php } ?>

                <h6 class="text-wrap">Pour être informé en avant-première <br> Inscrivez-vous dès maintenant :</h6>
            </div>
            <form action="traitement.php" method="post" class="form">
                <div class="form-group">
                    <input type="text" name="nom" class="form-control rounded-0 my-4" id="nom" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <input type="text" name="prenom" class="form-control rounded-0 my-4" id="prenom" placeholder="Prenom" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control rounded-0 my-4" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="tel" name="telephone" class="form-control rounded-0 my-4" id="telephone" placeholder="Numéro de tel" pattern="[0-9]{10}" required>
                </div>
                <input type="submit" class="btn" value="Valider">
            </form>
        </div>
    </div>


</main>


<?php include 'partials/footer.php' ; ?>

