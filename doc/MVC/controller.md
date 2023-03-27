# Présentation du Controller 

Dans ce dossier "controller" nous avons un fichier "home_controller.php" dans ce fichier, nous avons du code qui permet de gèrer une requête de recherche de films effectuée par l'utilisateur.

## En détails

Les instructions "require" permettent d'inclure les fichiers "config.php" et "navbar.php" qui contient respectivement les variables de configuration et la navbar du site.

La condition "if (isset($_POST["rechercher"]))" permet de vérifier si un formulaire a été soumis via la méthode POST avec un champ de saisie appelé "rechercher". Si c'est le cas, le code de la condition sera exécuté.
La chaîne de caractères saisie dans le champ de saisie est ensuite encodée en URL à l'aide de la fonction "urlencode".

La variable "$search_url" est construite avec l'URL de l'API The Movie Database (TMDb), en y incluant la clé API qui est stockée dans le fichier ".env". Cette URL permet de rechercher des films avec le titre spécifié.

Ensuite, la fonction "file_get_contents" permet de récupérer les résultats de la recherche depuis l'API TMDb sous forme de chaîne de caractères. La fonction "json_decode" permet de convertir cette chaîne de caractères en tableau associatif PHP.

Pour finir, les résultats de la recherche sont ensuite transmis à la vue "home.php" grâce à l'instruction "include". Si des résultats sont trouvés, la variable "$movie_details" contient les informations du premier film trouvé. Sinon, la variable est nulle. La vue se chargera d'afficher ces résultats à l'utilisateur.

## Bonus : journalisation des recherches

Si une recherche a été effectuée, les informations de la recherche sont enregistrées dans un fichier de log "recherche.log" situé dans le dossier "logs" du projet. Le titre de la recherche et la date de recherche sont enregistrées sur une nouvelle ligne dans le fichier de log.