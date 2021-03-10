<?php 
session_start() ;
if(!isset($_SESSION['user'])) {header('location: /loginprof.php');}

include 'parcials/header.php'; 
include 'includes/db.php'; 
$user=$_SESSION['user'];   
//eleves
$query = $pdo->prepare('SELECT * FROM eleves ');
$query->execute();
$eleves = $query->fetchAll();
?>
<section  class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h1 class="display-4 mb-4 text-center clearfix">Ajouter Les notes</h1>
                <?php 
                if(isset($_GET['msg'])): 
                if($_GET['msg'] == 'success'): 
                ?>
                    <div class="alert alert-success" role="alert">
                    Les notes sont ajouté avec succes !!
                    </div>
                <?php 
                endif; 
                endif; 
                ?>
              <?php
               if(!isset($_GET['msg'])): 
                
                ?>
              <h2 class="mb-4 text-center "> Voici les étudiants de  La matiere : <?= $user['matiere'] ?>  </h2>
                
                
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">CNE</th>
                        <th scope="col">NOM COMPLET</th>
                        <th scope="col">DATE DE NAISSANCE</th>
                        <th scope="col">NOTE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($eleves as $eleve): ?>
                        <tr>
                        <th scope="row"><?= $eleve['code'] ?></th>
                        <td><?= $eleve['nom'] ?> <?= $eleve['prenom'] ?></td>
                        
                        <td><?= $eleve['date'] ?></td>
                        <td>
                            <div class="form-group">
                                <input type="number" class="form-control form-control-sm note" id="<?= $eleve['id'] ?>">
                            </div>
                        </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
               
               
                
                <input type="hidden" id="matiere" value=" <?= $user['matiere'] ?>">
                <div class="form-group">
                    <button class="btn btn-success form-control" id="submit">Enter Notes</button>
                </div> 
                <?php 
                else :
                ?>
                
                <?php
                endif;
                ?>

            </div>
        </div>
    </div>
</section>
<script src="js/app.js"></script>
<?php include 'parcials/footer.php'; ?>