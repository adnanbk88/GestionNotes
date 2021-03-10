
<?php
session_start();
include 'db.php';


$cne = $_POST['cne'];
$cni = $_POST['cni'];


$stmt = $pdo->prepare('SELECT * FROM eleves WHERE code= ?');
$stmt->execute([$cne]);
$eleve = $stmt->fetch();

if($cni == $eleve['cni']){
    $_SESSION['eleve'] = $eleve;
    header('location: /note.php');
}else {
    header('location: /note.html');
}

?>