<?php
require "../Model/config.php";

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
    include ("../View/home.php");
}
?>