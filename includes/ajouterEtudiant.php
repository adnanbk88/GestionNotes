<?php
include "db.php";
$nom=$_POST["Nom"];
$prenom=$_POST["prenom"];
$code=$_POST["code"];
$cni=$_POST["cni"];
$niveau=$_POST["niveau"];

$option=$_POST["option"];
$date=$_POST["date"];

$stmt = $pdo->prepare('INSERT INTO eleves(Nom,prenom,code,cni,niveau,option,date) VALUES(?,?,?,?,?,?,?)');
$stmt->execute([$nom,$prenom,$code,$cni,$niveau,$option,$date]) ; 
header('location: /note.html');
?>