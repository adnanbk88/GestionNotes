<?php
session_start();
if (!isset($_SESSION['eleve'])) {
    header('location: /note.html');
}
include 'includes/db.php';
include 'parcials/header2.php';
$eleve = $_SESSION['eleve'];

$eleve_id = $eleve['id'];

//get notes 
$stmt = $pdo->prepare('SELECT * FROM notes WHERE id_eleve = ?');
$stmt->execute([$eleve_id]);
$notes = $stmt->fetchAll();
//get eleves
/* $stmt = $pdo->prepare('SELECT * FROM eleves WHERE id = ?');
$stmt->execute([$eleve_id]);
$eleve = $stmt->fetch(); */ 
$res;


?>




<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">

                <table class="table table-striped table-bordered table-borderless ">
                    <thead class="table-Success">
                        <tr class="table-success">
                            <th scope="col">CNE</th>
                            <th scope="col">CIN</th>
                            <th scope="col">Nom Complet </th>
                            <th scope="col">Date de naissance</th>
                            <th scope="col">Niveau</th>
                            <th scope="col">Option</th>


                        </tr>
                    </thead>
                    <tbody>


                        <tr class="table-default">
                            <th scope="row"><?= $eleve['code'] ?></th>
                            <th scope="row"><?= $eleve['cni'] ?></th>
                            <td><?= $eleve['nom'] ?> <?= $eleve['prenom'] ?></td>
                            <td><?= $eleve['date'] ?></td>
                            <td><?= $eleve['niveau'] ?></td>
                            <td><?= $eleve['option'] ?></td>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">

                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>

                            <th scope="col">ELEMENT </th>
                            <th scope="col">NOTE</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($notes as $note) : ?>

                            <tr>

                                <td><?= $note['matiere'] ?></td>
                                <td><?= $note['note'] ?></td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

    <?php $res = isset($_POST['res']);;
    foreach ($notes as $note) : ?>

        <?php $res +=  $note['note']  ?>
    <?php endforeach; ?>
    <div class="container">
    <div style="width: 900px; margin: auto; padding-top:10px; padding-bottom:18px;border: 8px solid #A0A0A0; text-align: center;background: #C0C0C0;">
    <h1 class=" mb-4 text-center "> <?php echo " MOYENNE GENERALE DU SEMESTRE  : "  ?>

        <button class="btn <?php if($res / 8 > 12)echo 'btn-success'; else echo 'btn-danger'; ?> btn-lg m-4"> <?php echo  $res / 8     ?>
        </button>
    </h1>



    <h1 class=" mb-4 text-center ">
        RESULTAT :
        <button class="btn <?php if($res / 8 > 12)echo 'btn-success'; else echo 'btn-danger'; ?> btn-lg m-4">
            <?php

            if ($res / 8 > 12) {
                echo 'ADMIS(E)';
            }
            if ($res / 8 < 12) {
                echo 'NON ADMIS';
            }


            ?></h1>
    </button>
    



<h1 class=" mb-4 text-center ">
    VOTRE MENTION EST :
    <button class=" btn <?php if($res / 8 > 12)echo 'btn-success'; else echo 'btn-danger'; ?>  btn-lg m-4">
        <?php

        if ($res / 8 > 0 && $res / 8 < 12) {
            echo 'NON ADMIS';
        }
        if ($res / 8 > 12 && $res / 8 < 14) {
            echo 'ASSEZ BIEN';
        }

        if ($res / 8 > 14 && $res / 8 < 16) {
            echo 'BIEN';
        }
        if ($res / 8 > 16 && $res / 8 < 18) {
            echo 'TRES BIEN ';
        }
        if ($res / 8 >= 18) {
            echo 'EXELENT! ';
        }
        ?></h1>
</button>

</section>