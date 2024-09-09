<?php

include('fct/item.php');
include('fct/request.php');
include('config/app.php');
include('config/db.php');
include('connexion.php');

//$items = getItems();
$id =  get('item');

//$id =  post('editItem');

$query= 'DELETE FROM todo WHERE id= :id';
$stmt= $pdo->prepare($query);


$stmt->bindParam('id', $id);

$stmt->execute();


//unset($items[$id]);

//saveItems($items);

header('location:index.php');