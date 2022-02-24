<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>

<div class="col-md-12 backgroundimg">
    <div class="logo">
       <img src="assets/imgs/general-icon.png" alt="">
    </div>
    <form class="form-animation" action="inc/submit.php" method="POST">
    <div class="container-fluid pt-5 text-center h-75 text-dark welcometext">
        Bienvenu aux Gestion local P.M.E
    </div>
    <div class="container-fluid p-2 text-center h-75 text-dark conntext">
    connectez-vous
    </div>

    <div class="container-fluid pt-5 text-center h-75 text-dark ">
        <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="text" class="form-control login-input" name="username" placeholder="Nom d'utilisateur" /> 
                        <span class="input-group-btn">
                        <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-user"></i></span>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4"></div>
            </div><!-- /.row -->
    </div>
    <div class="container-fluid pt-4 text-center h-75 text-dark ">
        <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="password" class="form-control login-input" name="password" placeholder="Mot de passe" /> 
                        <span class="input-group-btn">
                        <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-lock"></i></span>
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4"></div>
            </div><!-- /.row -->
    </div>
    <div class="container-fluid pt-4 text-center h-75 text-dark ">
        <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="submit" class="form-control login-input submit-input" value="Connexion" /> 
                        <span class="input-group-btn">
                        </span>
                    </div><!-- /input-group -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4"></div>
            </div><!-- /.row -->
            <?php 
            if (isset($_GET['error'])){
                echo '
                <div class="container-fluid pt-4 text-center h-75 text-dark "><div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                    <div class="alert alert-danger">
                        '.$_GET['error'].'
                    </div>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4"></div>
                    ';
            }
            ?>
            </div>
            </form>
    
    <footer>
    <div class="footer-copyright text-center cp-r" style="margin-top : 20%;">Copyright © Puertotransit logistic,  All Rights Reserved.
    </footer>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>