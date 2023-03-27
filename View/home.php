<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CineSearchPro</title>
	<link rel="stylesheet" href="../View/css/style.css">
</head>

<body>

	<div id="film-container">

		<?php
		if ($movie_details) {
			echo "<h1 id='titre-film'>" . $movie_details["title"] . "</h1>";
			if ($movie_details["poster_path"]) {
				$movie_img_url = "https://image.tmdb.org/t/p/w500{$movie_details["poster_path"]}";
				echo "<p id='date-réalisation-film'>Sortie le " . date('d-m-Y', strtotime($movie_details["release_date"])) . "</p>";
				echo "<img id='img-film' src='" . $movie_img_url . "' alt='" . $movie_details["title"] . "' />";
			}
			echo "<p id='description-film'>" . $movie_details["overview"] . "</p>";
			$credits_url = "https://api.themoviedb.org/3/movie/{$movie_details["id"]}/credits?api_key={$api_key}";
			$credits_json = file_get_contents($credits_url);
			$credits_data = json_decode($credits_json, true);
			$directors = array_filter($credits_data["crew"], function ($crew) {
				return $crew["job"] === "Director";
			});
			if (count($directors) > 0) {
				echo "<p id='realisateur-film'>Réalisateurs :</p>";
				echo "<ul>";
				foreach ($directors as $director) {
					echo "<li id='nom-realisateur-film'>" . $director["name"] . "</li>";
				}
				echo "</ul>";
			}
		} else {
			echo "<p>Aucun résultat de recherche n'a été trouvé.</p>";
		}
		?>
	</div>
</body>

</html>