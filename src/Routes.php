<?php

namespace connexion;

use Afpa\Core\Router;

use Afpa\Controllers\LoginController;
use Afpa\Controllers\UtilisateurController;

// Instanciation du router
$router = new Router();

// Définition de toutes les routes du site
$router->addRoute('/', LoginController::class, 'login');
$router->addRoute('/register', LoginController::class, 'register');
    
// page administrateur
$router->addRoute('/utilisateurs/list', UtilisateurController::class, 'list');