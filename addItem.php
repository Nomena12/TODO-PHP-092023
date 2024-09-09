<?php

include('config/app.php');
include('fct/request.php');
include('fct/item.php');
include('config/db.php');
include('connexion.php');

$intitule = post("intitule") ; 

$query= "INSERT INTO todo (intitule) VALUES (:intitule)" ;
$stmt= $pdo->prepare($query);

$stmt->bindParam('intitule', $intitule);


$stmt->execute();




header('location:index.php');
