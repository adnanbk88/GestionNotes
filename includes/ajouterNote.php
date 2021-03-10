<?php
include 'db.php';
/*  lire le tableau transformer le tab de format json au tableau normal*/
$_POST = json_decode(file_get_contents("php://input"), true);

$notes = $_POST['notes'];

foreach($notes as $note){
    $id_eleve = $note['id_eleve'];
    $val = $note['note'];;
    $matiere = $note['matiere'];
    $stmt = $pdo->prepare('INSERT INTO notes(id_eleve, matiere, note) VALUE(?,?,?)');
    $stmt->execute([$id_eleve,$matiere, $val]);
    //header('location: /?msg=success');
}

?>