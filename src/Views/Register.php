<section id="register-container">
    <h1 id="title">Ajouter un Utilisateur</h1>

    <div id="register">
        <form action="register" method="post" id="registerForm">
            <div>
                <div>

                    <!-- Utilisateur -->
                    <div>
                        <label for="utilisateur">Utilisateur :</label>
                        <div>
                            <input type="text" name="nom" id="utilisateur">
                            <!-- <div>Veuillez entrer un nom d'utilisateur.</div> -->
                        </div>
                    </div>

                    <!-- Mot de passe -->
                    <div>
                        <label for="password">Mot de passe :</label>
                        <div>
                            <input type="password" name="password" id="password">
                            <!-- <div>Veuillez entrer un mot de passe.</div> -->
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email">Email :</label>
                        <div>
                            <input type="email" name="email" id="email">
                            <!-- <div>Veuillez entrer une adresse email valide.</div> -->
                        </div>
                    </div>

                    <!-- Fonction -->
                    <div>
                        <label for="fonction">Fonction :</label>
                        <div>
                            <input type="text" name="fonction" id="fonction">
                            <!-- <div>Veuillez saisir une fonction.</div> -->
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div>
                        <div>
                            <button type="submit">Enregistrer</button>
                            <button type="reset">Annuler</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bouton "Retour à l'accueil" -->
            <div>
                <div>
                    <a href="/">Retour à l'accueil</a>
                </div>
            </div>
        </form>
    </div>
    <?php
    if (isset($error_message)) {
    ?>
        <div>
            <p><?= $error_message ?></p>
        </div>
    <?php
    } ?>
</section>