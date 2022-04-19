<?php

ob_start();
// php
$title = "Login";

$content_php = ob_get_clean();


ob_start(); ?>


<div class="row justify-content-md-center ">
    <div class="col-6">
        <div class="bg-light p-5 rounded-pilla rounded-3">
            <h3 class="text-center mb-4">CRÉER UN NOUVEAU COMPTE CLIENT </h3>
            <h5 class="text-center">SE CONNECTER</h5>

            <form method="post" autocomplete="off" class="row g-3">
                <div class="form-group">
                    <label class="form-label" for="email">Adresse mail: (<span class="text-kitea">*</span>)</label>

                    <input name="email" type="email" class="form-control" id="email" placeholder="Veuillez saisir votre email SVP !">
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Mot de passe: (<span class="text-kitea">*</span>)</label>

                    <input name="password" type="password" class="form-control" id="password" placeholder="Veuillez saisir votre mot de passe SVP !">
                </div>


                <div class="d-flex  mb-3">
                    <div class="me-auto p-2 ">
                        <button type="submit" name="ajt_compte" class="btn bg-kitea text-white">Connexion</button>
                    </div>
                    <div class="p-2 ">
                        <a href="forgotpassword" class="text-kitea fw-bold">Mot de passe oublié?</a>
                    </div>
                </div>

            </form>

            <h5 class="text-center mt-4">Nouveaux clients</h5>
            <hr>
            <p class="text-center">
                La création d’un compte a de nombreux avantages : consultation rapide, sauvegarder plusieurs adresses, suivre les commandes, et bien plus encore.
            </p>
            <div class="d-flex justify-content-center">
                <a href="register" class="btn bg-kitea text-white mt-4 text-center">Créer un compte</a>
            </div>

        </div>
    </div>
</div>

<?php $content_html = ob_get_clean(); ?>