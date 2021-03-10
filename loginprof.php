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

   
<section  class="py-5 vh-100 ">
    <div id="divlog">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="display-4 mb-5 text-center">Log In</h1>
                <?php 
                if(isset($_GET['msg'])): 
                if($_GET['msg'] == 'error'): 
                ?>
                    <div class="alert alert-danger" role="alert">
                    Information invalid !!
                    </div>
                <?php 
                endif; 
                endif; 
                ?>

                <form action="includes/handleLogin.php" method="POST">
                    <div class="form-group">
                        <input type="email" placeholder="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary form-control">Log in</button>
                    </div>
                   <a href=""><p>Password oublié ?</p></a> 
                </form>
            </div>
        </div>
    </div>
</div>
</section>
</body>
</html>

<?php include 'parcials/footer.php'; ?>