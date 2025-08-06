<?php

namespace Afpa\Controllers;

use Afpa\Core\Controller;
use Afpa\Models\Utilisateur;
use Afpa\Models\UtilisateurDAO;

/**
 * Contrôleur qui gère l'authentification des utilisateurs.
 */
class LoginController extends Controller 
{
    /**
     * Fonction qui se déclenchera lors du login de l'utilisateur 
     */
    public function login()
    {
        // tableau associatif à passer à la vue
        $data = [];

        // vérification de la présence d'informations concernant la connexion (requête "post")
        if (!empty($_POST))
        {
            // authentification de l'utilisateur
            $email = $_POST['email'];
            $password = $_POST['password'];

            $utilisateur = UtilisateurDAO::getByEmail($email);
            
            // si l'utilisateur a été retrouvé, alors connexion possible
            if (password_verify($password, $utilisateur->getPassword()))
            {
                // redirection vers la liste des utilisateurs si la connexion s'est effectué avec succès
                header("Location: /utilisateurs/list");
                die();
            }
            else
            {
                // ajout d'un message d'erreur à fournir à la page de login
                $error_message = "Connexion impossible, vérifiez vos informations de connexion.";
                // ajout d'un duo clef->valeur à passer à la vue
                $data['error_message'] = $error_message;
            }
        }

        // rendu de la page de login
        $this->render('Login', $data);
    }

    /**
     * Fonction qui se délenchera lors de la création d'un nouvel utilisateur
     */
    public function register()
    {
        $data = [];

        // vérification de la présence d'informations concernant la connexion (requête "post")
        if (!empty($_POST))
        {
            // récupération les informations du formulaire
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // TODO récupérer la "fonction" du $_POST

            // TODO hachage du mot de passe (en BCRYPT, par exemple)

            // TODO instanciation d'un nouvel utilisateur avant l'insertion en base de données
            // il faudra ici faire un appel au constructeur
            
            //TODO appel à laméthode "save" de la classe UtilisateurDAO afin de sauvegarder l'utilisateur en base de données (méthode )
            // il faut remplacer "null" par un appel au constructeur
            $utilisateur_bdd = null;

            // cas de l'utilisateur null (problème lors de l'insertion)
            if (is_null($utilisateur_bdd)) {
                // échec de la création
                // ajout d'un message d'erreur à fournir à la page de login
                $error_message = "Erreur lors de la création de l'utilisateur.";
                // ajout d'un duo clef->valeur à passer à la vue
                $data['error_message'] = $error_message;
                
            } else { // cas de succès !
                // redirection vers la page de login
                header("Location: /");
                die();
            }

        }
        $this->render('Register', $data);
    }
}