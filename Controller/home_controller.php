<?php
require "../Model/config.php";

if (isset($_POST["search"])) {
    // Recherche de films avec un titre spécifique
    $search_query = urlencode($_POST["search"]);
    $search_url = "https://api.themoviedb.org/3/search/movie?api_key={$api_key}&query={$search_query}";

    // Obtenir les résultats de recherche de l'API TMDb
    $search_results = json_decode(file_get_contents($search_url), true);

    // Journalisation de la recherche
    $log_file = dirname(__FILE__) . '/../logs/recherche.log';
    $search_term = $_POST['search'];
    $search_date = date('Y-m-d H:i:s');
    $log_line = "$search_date - $search_term\n";
    file_put_contents($log_file, $log_line, FILE_APPEND);

    // Passer les résultats de recherche à la vue
    if ($search_results["total_results"] > 0) {
        $movie_details = $search_results["results"][0];
    } else {
        $movie_details = null;
    }
    include ("../View/home.php");
}
?>