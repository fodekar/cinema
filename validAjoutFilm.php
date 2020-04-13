<?php

//Fichier de connexion
include 'data/ConnectDb.php';
var_dump('test');

//Récupération des données  du formulaire

$titre = $_POST['titre'];
$annee = $_POST['annee'];
$idGenre = $_POST['genre'];
$nomPhoto = $_POST['photo'];
$resume = $_POST['resume'];

var_dump('Test2');

$sql = "insert into Film values(NULL, '$titre', $annee, $idGenre, '$nomPhoto', '$resume')";

var_dump($sql, 'Test3');

$insert_movie = insertData($pdoDb, "insert into Film (titre, photo) values ('ooo', 'xx')");

var_dump($insert_movie); die;

//éxécution de la requette sql
    $resultat = $pdoDb->exec($sql);
    var_dump('test6');
    try {
        $resultat = $pdoDb->exec("insert into Film (titre, photo) values ('ooo', 'xx')");

        var_dump($resultat, 'Test4');
        //header('Location: index.php');
    } catch (Exception $e) {
        var_dump('Test5');
        echo "Problème d'insertion : ".$e->getMessage();
    }

var_dump('Test5');
