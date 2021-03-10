<?php 
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
</head>
<body>

<nav> 
    <div class="menu-icon">
      <span class="fas fa-bars"></span></div>
    <div class="logo">
      EST-SB</div>

<?php if(isset($user)): ?>
                  <li class="nav-item">
                    <p class="nav-link">Bonjour <?= $user['Nom'] ?> <?= $user['prenom'] ?> </p>
                  </li>
                  <form action="includes/handleLogout.php" method="POST">
                    <button class="btn btn-outline-primary">Log out</button>
                  </form>
                <?php endif; ?>
                <li class="nav-item">
                </li>
</nav>