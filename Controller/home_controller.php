<?php
session_start();
// Chargement des variables d'environnement à partir d'un fichier .env
$env_path = __DIR__ . '/../config/.env'; // Chemin d'accès au fichier .env
$env_vars = parse_ini_file($env_path); // Chargement des variables

// Extraire la clé d'API à partir de $env_vars
$api_key = $env_vars['API_KEY'];


if (isset($_POST["search"])) {
    // Recherche de films avec un titre spécifique
    $search_query = urlencode($_POST["search"]);
    $search_url = "https://api.themoviedb.org/3/search/movie?api_key={$api_key}&query={$search_query}";

    // Obtenir les résultats de recherche de l'API TMDb
    $search_results = json_decode(file_get_contents($search_url), true);

    // Passer les résultats de recherche à la vue
    if ($search_results["total_results"] > 0) {
        $movie_details = $search_results["results"][0];
    } else {
        $movie_details = null;
    }
    include("../View/home.php");
}
?>