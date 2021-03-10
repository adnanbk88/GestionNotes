<?php 
if(isset($_SESSION['eleve'])){
  $eleve = $_SESSION['eleve'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Votre Espace :</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php if(isset($user)): ?>
                  <li class="nav-item">
                    <p class="nav-link">Bonjour <?= $eleve['nom'] ?> <?= $eleve['prenom'] ?> </p>
                  </li>
                  <form action="includes/handleLogout.php" method="POST">
                    <button class="btn btn-outline-primary">Log out</button>
                  </form>
                <?php endif; ?>
                <li class="nav-item">
                </li>
              </ul>
            </div>
        </div>
    </nav>
    