# Présentation de la Vue

Dans le répertoire "View", nous pouvons retrouver un dossier "css" ou est stocké le fichier "style.css" concernant la présentation visuelle de la page web et deux autres fichiers : "navbar.php" qui représente la barre de navigation et "home.php" qui montre la page principale.

# La navbar 

## Pourquoi séparer la navbar de mon fichier home.php ?

La navbar est un élément récurrent qui est présent sur de nombreuses pages de l'application, et il est donc logique de la réutiliser à travers toutes ces pages.

En séparant la navbar dans un fichier distinct, on peut simplement inclure ce fichier dans chaque page de l'application où la navbar est nécessaire. Cela permet de réduire la duplication de code et de faciliter la maintenance de l'application. Si des modifications doivent être apportées à la navbar, il suffit de les apporter dans le fichier de la navbar et les modifications seront automatiquement appliquées sur toutes les pages qui incluent ce fichier.

De plus, en séparant la navbar dans un fichier distinct, on peut mieux organiser et structurer le code de l'application en séparant les préoccupations. Cela permet de rendre le code plus clair et plus facile à lire, à comprendre et à maintenir.

## Détail de la navbar

Le fichier "navbar.php" utilise le framework Bootstrap pour créer une barre de navigation responsive avec un formulaire de recherche. Le formulaire de recherche envoie également une requête POST à la page d'accueil de l'application lorsque l'utilisateur soumet une recherche.

# La page principale (home.php)

La page principale montre la vue d'affichage des détails du film sélectionné. Lorsque l'utilisateur saisit un titre de film dans la barre de recherche et soumet le formulaire, une requête POST est envoyée à la page d'accueil de l'application. 
Si le champ de recherche est rempli, la requête de recherche est envoyée à l'API TMDb en utilisant la clé d'API fournie. 
Ensuite, le résultat de la recherche est stocké dans une variable $search_results. Si la recherche donne un résultat, le premier film de la liste est stocké dans la variable $movie_details. 
Les détails du film sont ensuite affichés à l'aide de la syntaxe PHP et HTML.