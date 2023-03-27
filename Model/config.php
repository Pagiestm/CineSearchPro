<?php
// Chargement des variables d'environnement à partir d'un fichier .env
$chemin_env = __DIR__ . '/../config/.env'; // Chemin d'accès au fichier .env
$vars_env = parse_ini_file($chemin_env); // Chargement des variables

// Extraire la clé d'API à partir de $vars_env
$api_key = $vars_env['API_KEY'];
?>