<?php

$nameTourOperator = $_POST['nameTourOperator'];
$linkTourOperator = $_POST['linkTourOperator']; 

//chargement de la  class Manager
require "manager.php";
$bdd = new Manager('127.0.0.1');

//on récupère tous les operators de la bdd
$allOperator = $bdd->getAllOperator();


//on vérifie si il n'existe pas un TO qui à le même nom
foreach ($allOperator as $operator) {
    if ($operator['name']== $nameTourOperator){
        header('Location: ../pages/admin.php?error=invalidName'); 
        exit;
    }
}

$bdd->createTourOperator($nameTourOperator, $linkTourOperator);
header('Location: ../pages/admin.php'); 
