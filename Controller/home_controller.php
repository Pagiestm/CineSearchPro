<?php
require "../Model/config.php";
require "../View/navbar.php";

if (isset($_POST["rechercher"])) {
    
    // Recherche de films avec un titre spécifique
    $search_query = urlencode($_POST["rechercher"]);
    $search_url = "https://api.themoviedb.org/3/search/movie?api_key={$api_key}&query={$search_query}";

    // Obtenir les résultats de recherche de l'API TMDb
    $search_results = json_decode(file_get_contents($search_url), true);

    // Journalisation de la recherche
    if (!empty($_POST['rechercher'])) {
        $fichier_log = dirname(__FILE__) . '/../logs/recherche.log';
        $titre_recherche = $_POST['rechercher'];
        $date_recherche = date('Y-m-d H:i:s');
        $ligne_log = "$date_recherche - $titre_recherche\n";
        file_put_contents($fichier_log, $ligne_log, FILE_APPEND);
    }

    // Passer les résultats de la recherche à la vue
    if ($search_results["total_results"] > 0) {
        $movie_details = $search_results["results"][0];
    } else {
        $movie_details = null;
    }
    include("../View/home.php");
}
