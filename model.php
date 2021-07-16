<?php
// PDO
try {
    $film_db = new PDO('mysql:host=localhost;dbname=films_db;charset=utf8', 'phpmyadmin', 'Monmotdep@sssql1');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// requette pour la barre de recherche + modal

$search = $_POST['s'];
$sth = $film_db->prepare(
    "SELECT film.titre, film.description_film, date_de_sortie.date_de_sortie, group_concat(DISTINCT genre.genre) as genre, group_concat(DISTINCT realisateur.realisateur) as realisateur, film.image
FROM film
INNER JOIN film_has_realisateur ON film_has_realisateur.film_id_film = film.id_film
INNER JOIN realisateur ON realisateur.idrealisateur = film_has_realisateur.realisateur_idrealisateur
INNER JOIN film_has_genre ON film_has_genre.film_id_film = film.id_film
INNER JOIN genre ON genre.idgenre = film_has_genre.genre_idgenre
INNER JOIN date_de_sortie ON date_de_sortie.iddate_de_sortie = film.date_de_sortie_iddate_de_sortie
WHERE film.titre LIKE '%$search%'
GROUP BY film.id_film"
);
$sth->execute();



$test = $sth->fetchAll(PDO::FETCH_NUM);


// requette pour l'affiche des films aléatoire sur la page d'acceuil


$cover = $film_db->prepare(
    "SELECT film.image
    FROM film
    WHERE film.id_film"
);

// Requête pour la page film avec trailer

$movie_page = $film_db->prepare(
    "SELECT film.titre, film.description_film, date_de_sortie.date_de_sortie, group_concat(DISTINCT genre.genre) as genre, group_concat(DISTINCT realisateur.realisateur) as realisateur, film.image, film.trailer
    FROM film
    INNER JOIN film_has_realisateur ON film_has_realisateur.film_id_film = film.id_film
    INNER JOIN realisateur ON realisateur.idrealisateur = film_has_realisateur.realisateur_idrealisateur
    INNER JOIN film_has_genre ON film_has_genre.film_id_film = film.id_film
    INNER JOIN genre ON genre.idgenre = film_has_genre.genre_idgenre
    INNER JOIN date_de_sortie ON date_de_sortie.iddate_de_sortie = film.date_de_sortie_iddate_de_sortie
    WHERE film.affiche LIKE '%$movie%'
    GROUP BY film.titre, film.description_film, film.image, film.trailer, film.date_de_sortie_iddate_de_sortie"
);

// Requête pour les Genres

$gender_page = $film_db->prepare(
    "SELECT film.titre
FROM film
INNER JOIN film_has_genre ON film_has_genre.film_id_film = film.id_film
INNER JOIN genre ON genre.idgenre = film_has_genre.genre_idgenre
WHERE genre.genre LIKE '$gender_name'");



// Requête pour par réalisateurs
$director_page = $film_db->prepare(
    "SELECT film.image
    FROM film
    INNER JOIN film_has_realisateur ON film_has_realisateur.film_id_film = film.id_film
    INNER JOIN realisateur ON realisateur.idrealisateur = film_has_realisateur.realisateur_idrealisateur
    WHERE realisateur.realisateur LIKE '$director_name'"
);

// Requête par année

$years_page = $film_db->prepare(
    "SELECT film.titre 
    FROM film 
    INNER JOIN date_de_sortie ON date_de_sortie.iddate_de_sortie = film.date_de_sortie_iddate_de_sortie 
    WHERE date_de_sortie.date_de_sortie LIKE '$year'"
);

$abc_page = $film_db->prepare(
    "SELECT film.titre, film.description_film, date_de_sortie.date_de_sortie, group_concat(DISTINCT genre.genre) as genre, group_concat(DISTINCT realisateur.realisateur) as realisateur, film.image, film.trailer
    FROM film
    INNER JOIN film_has_realisateur ON film_has_realisateur.film_id_film = film.id_film
    INNER JOIN realisateur ON realisateur.idrealisateur = film_has_realisateur.realisateur_idrealisateur
    INNER JOIN film_has_genre ON film_has_genre.film_id_film = film.id_film
    INNER JOIN genre ON genre.idgenre = film_has_genre.genre_idgenre
    INNER JOIN date_de_sortie ON date_de_sortie.iddate_de_sortie = film.date_de_sortie_iddate_de_sortie
    WHERE film.titre
     LIKE '$Letter%'
    GROUP BY film.titre, film.description_film, film.image, film.trailer, film.date_de_sortie_iddate_de_sortie"
);