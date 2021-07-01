<?php
try{
    $filmdb = new PDO('mysql:host=localhost;dbname=films_db;charset=utf8', 'phpmyadmin', 'Monmotdep@sssql1');
}
catch (Exception $e)
{
die ('Erreur : ' . $e->getMessage());
}


$sth = $filmdb->prepare("SELECT titre FROM film");
$sth->execute();

$test = $sth->fetchAll();


print_r($test);