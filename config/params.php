<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => 'phperformance',
        'DB_USER' => 'root',
        'DB_PSWD' => 'root',
    ],
    'app' => [
        'name' => 'Php-Performance',
        'projectBaseUrl' => 'http://localhost:8888/php-cours/phperformance'
    ]
];



/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */
const BASE_DIR = __DIR__ . '/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR.'public/upload/';
const COVER = '../../public/upload/';

/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                  => ['AppController', 'index'],
    '/inscription'       => ['UserController', 'register']




];
