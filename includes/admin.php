<?php
include "db.php";
$Nom=$_POST["Nom"];
$prenom=$_POST["prenom"];
$Email=$_POST["Email"];
$password=$_POST["password"];
$matiere=$_POST["matiere"];


$stmt = $pdo->prepare('INSERT INTO profs(Nom,prenom,Email,password,matiere) VALUES(?,?,?,?,?)');
$stmt->execute([$Nom,$prenom,$Email,$password,$matiere]) ; 
header('location: /loginadmin.php');
?>