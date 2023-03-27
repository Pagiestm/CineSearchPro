# Présentation du Model 

Dans le répertoire "Model", nous pouvons retrouver un fichier "config.php" ce fichier est une configuration pour charger les variables d'environnement à partir d'un fichier .env et extraire la clé d'API à partir de ces variables.

## Le dossier "config" 

Dans ce dossier nous retrouvons notre fichier ".env" contenant la clé de l'API et un autre fichier ".htacess" pour interdire l'accès direct à ce fichier depuis l'extérieur du serveur.
Ainsi, même si un utilisateur essaie d'accéder au fichier en tapant l'URL dans le navigateur, le serveur renverra une erreur 403 "Accès interdit" grâce aux règles spécifiées dans le fichier ".htaccess".

Cela ajoute une couche de sécurité supplémentaire pour les informations sensibles stockées dans le fichier ".env", car seuls les scripts exécutés sur le serveur peuvent y accéder.

Pour tester ajouté un fichier ".env" dans le dossier "config" mettais la ligne suivante et remplacer "Votre-clé-API" par votre clé API en créant un compte sur l'API de The Movie Database (TMDb) : https://www.themoviedb.org/documentation/api : 

API_KEY=Votre-clé-API

## Le fichier ".gitignore"

Le fichier ".gitignore" est un fichier qui permet d'ignorer le fichier ".env" lors de l'ajout et de la gestion des fichiers avec Git.