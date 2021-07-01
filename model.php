<?php
try{
    $filmdb = new PDO('mysql:host=localhost;dbname=films_db;charset=utf8', 'phpmyadmin', 'Monmotdep@sssql1');
}
catch (Exception $e)
{
die ('Erreur : ' . $e->getMessage());
}

$search = $_POST['s'];
$sth = $filmdb->prepare("SELECT film.titre, film.description_film, film.date_de_sortie_iddate_de_sortie ,
group_concat(genre.genre) as genre
FROM film
INNER JOIN film_has_genre ON film_has_genre.film_id_film = film.id_film
INNER JOIN genre ON film_has_genre.genre_idgenre = idgenre
WHERE titre LIKE '%$search%'
GROUP BY film.titre, film.description_film, film.date_de_sortie_iddate_de_sortie
");
$sth->execute();


$test = $sth->fetchAll(PDO::FETCH_NUM);
// echo JSON_encode($test);
