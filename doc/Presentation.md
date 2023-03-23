# CineSearchPro est une application Web pour la recherche de films en utilisant l'API The Movie Database (TMDb).

## Utilisation du Modèle MVC (Model-View-Controller)

Ce modèle d'architecture de conception est utilisé pour développer des applications logicielles. Il divise l'application en trois parties distinctes :

- Le modèle (Model) : il représente la partie métier de l'application, qui gère les données et les règles de l'application. Il traite les données brutes de l'application pour les rendre utilisables par la logique de l'application.

- La vue (View) : elle représente l'interface utilisateur de l'application. Elle affiche les informations au format souhaité pour l'utilisateur et récupère les entrées utilisateur.

- Le contrôleur (Controller) : il agit comme un intermédiaire entre la vue et le modèle. Il reçoit les entrées utilisateur à partir de la vue, interroge le modèle pour obtenir les données nécessaires et renvoie les données au format approprié à la vue pour les afficher à l'utilisateur.

## Pourquoi utiliser le modèle MVC ?

En utilisant ce modèle, l'application est mieux organisée et plus facile à maintenir, car chaque partie est indépendante et peut être modifiée sans affecter les autres parties. Par exemple, si une modification est apportée à la logique de l'application, seule la partie modèle est affectée, la vue et le contrôleur restent intacts. Cela facilite également le test de l'application car chaque partie peut être testée séparément.

## La Vue (View)

[Explication de la vue](./doc/MVC/vue.md)

Le premier code représente la vue d'affichage des détails du film sélectionné. Lorsque l'utilisateur saisit un titre de film dans la barre de recherche et soumet le formulaire, une requête POST est envoyée à la page d'accueil de l'application. Si le champ de recherche est rempli, la requête de recherche est envoyée à l'API TMDb en utilisant la clé d'API fournie. Ensuite, le résultat de la recherche est stocké dans une variable $search_results. Si la recherche donne un résultat, le premier film de la liste est stocké dans la variable $movie_details. Les détails du film sont ensuite affichés à l'aide de la syntaxe PHP et HTML.

Le deuxième code représente la barre de navigation de l'application. Elle utilise le framework Bootstrap pour créer une barre de navigation responsive avec un formulaire de recherche. Le formulaire de recherche envoie également une requête POST à la page d'accueil de l'application lorsque l'utilisateur soumet une recherche.

En fin de compte, le code PHP situé en bas de la page d'accueil est responsable de la logique métier de l'application. Il vérifie si une requête de recherche a été soumise, effectue la recherche à l'aide de l'API TMDb, enregistre la recherche dans un fichier journal, et passe les résultats de recherche à la vue pour affichage.