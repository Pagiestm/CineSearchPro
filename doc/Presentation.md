# CineSearchPro est une application Web pour la recherche de films en utilisant l'API The Movie Database (TMDb).

## Utilisation du Modèle MVC (Model-View-Controller)

Ce modèle d'architecture de conception est utilisé pour développer des applications logicielles. Il divise l'application en trois parties distinctes :

- Le modèle (Model) : il représente la partie métier de l'application, qui gère les données et les règles de l'application. Il traite les données brutes de l'application pour les rendre utilisables par la logique de l'application.

- La vue (View) : elle représente l'interface utilisateur de l'application. Elle affiche les informations au format souhaité pour l'utilisateur et récupère les entrées utilisateur.

- Le contrôleur (Controller) : il agit comme un intermédiaire entre la vue et le modèle. Il reçoit les entrées utilisateur à partir de la vue, interroge le modèle pour obtenir les données nécessaires et renvoie les données au format approprié à la vue pour les afficher à l'utilisateur.

## Pourquoi utiliser le modèle MVC ?

En utilisant ce modèle, l'application est mieux organisée et plus facile à maintenir, car chaque partie est indépendante et peut être modifiée sans affecter les autres parties. Par exemple, si une modification est apportée à la logique de l'application, seule la partie modèle est affectée, la vue et le contrôleur restent intacts. Cela facilite également le test de l'application car chaque partie peut être testée séparément.

## La Vue (View)

[Explication de la Vue](../doc/MVC/vue.md)

## Le Model et la configuration

[Explication du Model](../doc/MVC/model.md)