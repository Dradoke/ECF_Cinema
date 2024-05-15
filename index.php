<?php

// ******************** Controller pricipal ***************************************


// Initialisation de l'environnement

// Load Our autoloader

require './config/init.php';



// ************         Affichage du header  ***************************************
require './controller/header.php';



// ************          Gestion de Routing ***************************************
$routes = [
    '/' => './controller/accueil.php',
    'accueil' => './controller/accueil.php',
    // 'creer' => './controller/creer.php',
    // 'delete' => './controller/delete.php',
    // 'update' => './controller/update.php',
];

$controller = isset($_GET['action']) ?  $_GET['action'] : '/';

if (array_key_exists($controller, $routes)) {
    require $routes[$controller];
} else {
    require 'controller/erreur.php';
}

// ************          Affichage du Main ***************************************
require_once './model/repository/connexion.php';
require_once './model/repository/MovieDao.php';
require_once './model/repository/ActorDao.php';
require_once './model/repository/UserDao.php';
require_once './model/repository/RoleDao.php';
require_once './model/entity/Movie.php';
require_once './model/entity/Actor.php';
require_once './model/entity/User.php';
require_once './model/entity/Role.php';

$movies =  new MovieDao;
$roles = new RoleDao;

echo $twig->render('accueil.html.twig',
['movies' => $movies,
'roles' => $roles
]
);



// ************          Affichage du footer  ***************************************
require './controller/footer.php';
