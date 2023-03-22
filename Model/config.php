<?php
// Chargement des variables d'environnement à partir d'un fichier .env
$env_path = __DIR__ . '/../config/.env'; // Chemin d'accès au fichier .env
$env_vars = parse_ini_file($env_path); // Chargement des variables

// Extraire la clé d'API à partir de $env_vars
$api_key = $env_vars['API_KEY'];
?>