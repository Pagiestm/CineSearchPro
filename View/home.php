<nav class="navbar">
	<h1>CineSearchPro</h1>
	<form method="POST">
		<label for="search">Rechercher un film :</label>
		<input type="text" name="search" id="search">
		<button type="submit">Rechercher</button>
	</form>
</nav>
<div id="movie-container">
    
<?php if ($movie_details): ?>
    <h1 id='movie-title'><?= $movie_details["title"] ?></h1>
    <?php if ($movie_details["poster_path"]): ?>
        <?php $movie_img_url = "https://image.tmdb.org/t/p/w500{$movie_details["poster_path"]}" ?>
        <img id='movie-img' src='<?= $movie_img_url ?>' alt='<?= $movie_details["title"] ?>'/>
    <?php endif; ?>
    <p id='movie-description'><?= $movie_details["overview"] ?></p>
    <p id='movie-release-date'>Sortie le <?= $movie_details["release_date"] ?></p>
<?php else: ?>
    <p>Aucun résultat de recherche n'a été trouvé.</p>
<?php endif; ?>


<style>

.navbar {
			display: flex;
			justify-content: space-between;
			align-items: center;
			background-color: #333;
			color: #fff;
			padding: 10px;
		}
		.navbar h1 {
			font-size: 24px;
			margin: 0;
		}
		.navbar form {
			display: flex;
			align-items: center;
		}
		.navbar label {
			margin-right: 10px;
		}
		.navbar input[type="text"] {
			padding: 5px;
			border-radius: 5px;
			border: none;
			margin-right: 10px;
		}
		.navbar button {
			padding: 5px 10px;
			border-radius: 5px;
			border: none;
			background-color: #fff;
			color: #333;
			cursor: pointer;
		}

/* Styles pour le conteneur principal */
#movie-container {
  width: 100%;
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f1f1f1;
}

/* Styles pour l'image du film */
#movie-img {
  width: 100%;
  max-width: 500px;
  height: auto;
  margin-bottom: 20px;
}

/* Styles pour le titre */
#movie-title {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 10px;
}

/* Styles pour la description */
#movie-description {
  font-size: 16px;
  line-height: 1.5;
  margin-bottom: 20px;
}

/* Styles pour la date de sortie */
#movie-release-date {
  font-size: 14px;
  color: #888;
}


</style>
</div>