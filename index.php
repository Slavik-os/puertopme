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
    <link rel="stylesheet" href="main.css">
    
    <title>Document</title>
</head>
<body>
  <style>
    *{
      font-familty : 'Titillium Web' !important;
    }
  </style>
<?php
session_start();
if(isset($_SESSION['username'])) {
    if ($_SESSION['role']=='responsable'){?>
<div class="row">
<nav class="navbar navbar_v justify-content-between flex-nowrap" style="background:#22262F;border:none;position:; ;width:100% !important; z-index:5;">
<a class="navbar-brand" href="#">
    <img src="assets/imgs/general-icon.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="nav-text" style="font-family:'Titillium Web'"> PUERTO TRANSIT </span>
  </a>
  <div class="dropdown mr-5" style="padding-left: 0 100px">
  <button class="btn btn-secondary dropdown-toggle" style='background:none;border : none;'type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="assets/imgs/default_login.png" alt=""> 
    <span class="user_id" style="color : #8391A3;"><?php echo $_SESSION['username'];?></span>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" ">
    <a class="dropdown-item hover-drop" href="#" ">LOGOUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
  </div>
</div>
</nav>
</div>
<nav class="main-menu" style="z-index:1; height:inherit;">
            <ul>
                <li>
                    <a href="http://justinfarrow.com">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="#">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Stars Components
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Forms
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="#">
                       <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Pages
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-bar-chart-o fa-2x"></i>
                        <span class="nav-text">
                            Graphs and Statistics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-font fa-2x"></i>
                        <span class="nav-text">
                           Quotes
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                       <i class="fa fa-table fa-2x"></i>
                        <span class="nav-text">
                            Tables
                        </span>
                    </a>
                </li>
                <li>
                   <a href="#">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <span class="nav-text">
                            Maps
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                       <i class="fa fa-info fa-2x"></i>
                        <span class="nav-text">
                            Documentation
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a href="#">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>

<div class="boxParent" style="margin: 10px 90px;">
    <h1 class="txt-header" style="font-family: 'Titillium Web';font-weight: bolder;">Ajouter des Employés</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Ajouter </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter des Employés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
          <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Personnel</h5>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Mattricule:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Nom:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div><!--  row end -->
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Prénom:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">CIN:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Date d'embauche:</label>
                <input type="date" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Address:</label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Photo:</label>
                <input type="file" class="form-control" placeholder="..." id="recipient-name">
                </div> <!--  row end -->
          </div>
          <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Contact</h5>
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Numero (Portable) : </label>
                <input type="phone" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Numero d’extention : </label>
                <input type="phone" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Fix direct : </label>
                <input type="phone" class="form-control" placeholder="..." id="recipient-name">
              </div>
            </div><!--  row end -->
            <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Personnel</h5>
            <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Contact</h5>
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Département : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Fonction : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
          </div><!--  row end -->
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Résponsable : </label>
                <select class="form-select" aria-label="Default select example">
                  <option selected disabled>Selectionner un responsable</option>
                  <option value="It">IT</option>
                  <option value="Rh">RH</option>
                  <option value="Finance">Finance</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Bureaux : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
          </div><!--  row end -->
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Post : </label>
                <input type="text" class="form-control" placeholder="..." id="recipient-name">
              </div>
          </div><!--  row end -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
    </div>


  </div>

<?php
    }else {
        header('Location:login.php');
    }
}else {
    echo '403 ,Frobidden !';
    header('Location:login.php');
}
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
<html>