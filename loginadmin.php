<?php include 'parcials/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="menu-icon">
            <span class="fas fa-bars"></span></div>
        <div class="logo">
            EST-SB</div>
        <div class="nav-items">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Emploi du temps</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="loginprof.php">E-Enseignant</a></li>
            <li><a href="etudiant.html">E-Etudiant</a></li>
        </div>
        <div class="search-icon">
            <span class="fas fa-search"></span></div>
        <div class="cancel-icon">
            <span class="fas fa-times"></span></div>
        <form action="#">
            <input type="search" class="search-data" placeholder="Search" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>


    <section class="py-5 vh-100 ">
        <div id="divlog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="display-4 mb-5 text-center">Log In</h1>


                        <form action="includes/admin.php" method="POST">
                            <div class="form-group">
                                <input type="Nom" placeholder="Nom" class="form-control" name="Nom">
                            </div>
                            <div class="form-group">
                                <input type="Prenom" placeholder="Prenom" class="form-control" name="prenom">
                            </div>
                            <div class="form-group">
                                <input type="Email" placeholder="Email" class="form-control" name="Email">
                            </div>
                            <div class="form-group">
                                <input type="Password" placeholder="Password" class="form-control" name="password">
                            </div>
                            <div class="form-group mb-3">
                    <label>Select Matiere:</label>
                    <select class="form-control" id="matiere" name="matiere">
                        <option value="Base De Donnée ">Base De Donnée </option>
                        <option value="VB.NET">VB.NET </option>
                        <option value="MERISE"> MERISE </option>
                       
                        <option value="S.E"> S.E </option>
                        <option value="ALGEBRE"> ALGEBRE </option>
                        <option value="CPP"> CPP </option>
                        <option value="PROGRAMATION C "> PROGRAMATION C </option>
                        <option value=" ANALYSE "> ANALYSE </option>
                    </select>
                </div>
                            <div class="form-group">
                                <button class="btn btn-primary form-control">S'inscrire </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php include 'parcials/footer.php'; ?>