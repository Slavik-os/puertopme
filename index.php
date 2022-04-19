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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javas cript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    

    <title>Document</title>
</head>
<body>

<style>
  td img {
    width : 50px;
    height : 50px;
    border-radius : 50%;
    object-fit : contain ;
  }
  table th , table td {
    font-size : 10px;
  }

  .fa {
    font-size :14px;
  }
  #tab_filter input[type=search]{
    margin-right :50px;
    border-radius: 0.25em !important;
    border : 0.5px solid rgb(206, 212, 218);
    outline : none ;
    padding : 0.275em 0.75em;
    color : #495057 ;
  }
  #tab_length label ,#tab_info{
    font-size : 15px;
  }
  .fa {
    cursor: pointer;
  }
  @media screen and (max-width:1460px) {
    body {
    
    }
    .main-menu {
      height :150% !important;
    }
    #tab_length label ,#tab_info,#tab_paginate{
    font-size : 12px;
  }
  #tab_filter input[type=search]{
    width : 100px;
    border-radius: 0.25em !important;
    border : 0.5px solid rgb(206, 212, 218);
    outline : none ;
    padding : 0.375em 0.75em;
    color : #495057 ;
  }
  }
  th {
    font-size:10px !important;
  }
  td{
  font-size:8px !important;
}
.image-login {
    width:50px;
    height : 50px;
    border-radius :50%;
    object-fit : cover ;
}
.dropdown-menu {
    max-height: 280px;
    overflow-y: auto;
}
.noti-image  {
  width:50px;
    height : 50px;
    border-radius :50%;
    object-fit : cover ;

}
.uname-holder {
  display : flex;
}
.full_name_holder {
  font-size : 14px;
}

.etat_div {
  font-size:13px;
}
.date_div {
  font-size:12px;
  color:grey;
}
.main-menu {
        margin-top:90px;
}
</style>
<?php
session_start();
if(isset($_SESSION['username'])) {
    if ($_SESSION['role']=='responsable'){?>
<div class="row">
<nav class="navbar navbar_v justify-content-between flex-nowrap" style="background:#212121;border:none;position:; ;width:100% !important; z-index:5;">
<a class="navbar-brand" href="#">
    <img src="assets/imgs/general-icon.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="nav-text" style="font-family:'Titillium Web'"> PUERTO TRANSIT </span>
  </a>
  
  <!-- Drop down alert -->
  <span style=" display:flex ;justify-content:center">
  <div class="dropdown">
  <?php
  if(isset($_SESSION['departement'])){
    if($_SESSION['departement']==='IT'){
      echo '
      <li class="nav-item dropdown">
      <a class="nav-link text-light"  style="margin-bottom :" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i style="font-size:22px;" class="fa fa-bell mb-5"><span class="counter counter-lg" id="notification-count" style="background-color:#ff2112;color:#fff; padding:5px; border-radius:50%;font-size:10px"></span>&nbsp;&nbsp;</i>
      </a>
      <ul class="dropdown-menu" style="width:300px !important">
      <li class="head text-light bg-dark">
      <div class="row">
      <div class="col-lg-12 col-sm-12 col-12">
      <a href="" class="float-right text-light"></a>
      </div>
      </li>
    <li class="notification-box">
    <div class="row" id="noti_parent"> <!-- Parent Row for notification data -->
    
    </div>
    </li>
      
      ';
    }
  }
  
  ?>
</ul>
</li>



        <div class="dropdown-menu dropdown-menu-lg-right dropdown" aria-labelledby="navbarDropdownMenuLink-5">
    </div>
    </div>
  <div class="dropdown" style="padding-left: 0 100px">
  <button class="btn btn-secondary dropdown-toggle" style='background:none;border : none;margin-top:20px'type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img id="login_photo" class="image-login" src="assets/imgs/default_login.png" alt="">
    <span class="user_id" style="color : #8391A3"> <?php echo $_SESSION['username'].' / '.$_SESSION['departement'];?></span>
  </button>
  <div class="dropdown-menu mt-2 pr-1" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item hover-drop" href="logout.php" >LOGOUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
  </div>
    </span>
    </div>
    </div>
  <!-- Drop down alert end -->

</nav>



<div class="area" ></div>
<nav class="main-menu" style="z-index:1;flex-nowrap;">
             <ul>
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                            Dashboard
                        </span>
                    </a>
                </li>
               
                <?php
                if(isset($_SESSION['departement'])){
                  if($_SESSION['departement'] === 'IT'){
                    echo '
                    <li class="has-subnav">
                    <a href="perm.php">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Change les permistion
                        </span>
                    </a>
                </li>
                    ';
                  }
                }
                ?>
                <?php
                  if(isset($_SESSION['departement'])){
                    if ($_SESSION['departement']== 'QUALITY'){
                    echo '
                    <li class="has-subnav">
                    <a href="action_damilioration.php">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Action D`amelioration
                        </span>
                    </a>
                </li>
                    ';
                  }
                }
                ?>
                   <li class="has-subnav">
                    <a href="my_demands.php">
                       <i class="fa fa-list fa-2x"></i>
                        <span class="nav-text">
                            Mes Demands
                        </span>
                    </a>
                </li>
               
            <ul class="logout">
                <li>
                   <a href="logout.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
<div class="boxParent" style="margin: 10px 90px;">
  <?php
  if($_SESSION['permission'] != 'none'){
    echo '
    <h1 class="txt-header" style="font-family:"Open Sans">Ajouter des Employés</h1>
    <button type="button" class="btn btn-primary my-3 px-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Ajouter </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter des Employés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Add employee Modal !-->
      <div class="modal-body">
        <form  action=" add.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
          <h5 class="modal-title modal-title-text" id="exampleModalLabel">Information Personnel</h5>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Mattricule:</label>
                <input type="text" class="form-control" placeholder="..."  name="matricule">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Nom:</label>
                <input type="text" class="form-control" placeholder="..."  name="firstName">
              </div><!--  row end -->
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Prénom:</label>
                <input type="text" class="form-control" placeholder="..." name="lastname">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="text" class="form-control" placeholder="..." name="email">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Nom d\'utilisateur :</label>
                <input type="text" class="form-control" placeholder="..." name="username">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Mode de pass :</label>
                <input type="password" class="form-control" placeholder="..." name="password">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">CIN:</label>
                <input type="text" class="form-control" placeholder="..." name="cin">
              </div>

              <div class="col-md-6">
              <label for="recipient-name" class="col-form-label">Date de naissance</label>
              <input type="date" class="form-control" placeholder="..." name="date_birth">
            </div>

              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Date d\'embauche:</label>
                <input type="date" class="form-control" placeholder="..." name="date_em">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Address:</label>
                <input type="text" class="form-control" placeholder="..." name="address">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Photo:</label>
                <input type="file" class="form-control" placeholder="..." name="fileToUpload" id="">
                </div> <!--  row end -->
          </div>
          <h5 class="modal-title modal-title-text"el">Information Contact</h5>
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Numero (Portable) : </label>
                <input type="phone" class="form-control" placeholder="..." name="phone_portable">
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Numero d’extention : </label>
                <input type="phone" class="form-control" placeholder="..." name="numero_extenstion">
              </div>
            </div><!--  row end -->
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Fix direct : </label>
                <input type="phone" class="form-control" placeholder="..." name="numero_fix">
              </div>
            </div><!--  row end -->
            <h5 class="modal-title modal-title-text"exampleModalLabel">Information Contact</h5>
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Fonction : </label>
                <input type="text" class="form-control" placeholder="..." name="fonction">
              </div>
          </div><!--  row end -->
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Département : </label>
                <select class="form-select"  name="departements">
                <option value="IT">IT</option>
                <option value="FINANCE">FINANCE</option>
                <option value="RH">RH</option>
                <option value="QUALITY">QUALITY</option>
              </select>
              </div>
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Bureaux : </label>
                <input type="text" class="form-control" placeholder="..."  name="bureaux">
              </div>
          </div><!--  row end -->
          <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Post : </label>
                <input type="text" class="form-control" placeholder="..."  name="post">
              </div>
          </div><!--  row end -->
        
      </div>
      <div class="modal-footer">
        <input type="submit" value="Ajouter" name="submit" class="btn btn-primary">
        <input type="hidden" name="add" value="add">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>
        </form>
        </div>
      </div>
      </div>
     </div> <!-- modal End -->
     <!-- Add employee Modal End!-->

     <!-- edit Modal -->
     <div class="modal fade bd-example-modal-lg" id="exampleModal2"="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Matricule</label>
                <input type="text" class="form-control" name="matricule" id="matricule">
              </div>


            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Nom</label>
                <input type="text" class="form-control" name="firstName" id="firstname">
              </div>
              <div class="col-md-6">
              <label for="recipient-name" class="col-form-label">Prénom</label>
                <input type="text" class="form-control" name="lastname" id="lastname">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Cin</label>
                <input type="text" class="form-control" name="cin" id="cin">
              </div>
              <div class="col-md-6">
              <label for="recipient-name" class="col-form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email">
              </div>
            </div>

            <div class="row">
            <div class="col-md-6">
            <label for="recipient-name" class="col-form-label">Address</label>
              <input type="text" class="form-control" name="address" id="address">
            </div>
              '; if($_SESSION['departement']=='IT'){echo '
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Date d\'embauche</label>
                <input type="date" class="form-control" name="date_em" id="date_em">
              </div>
              ';}echo'
              <div class="col-md-6">
              <label for="recipient-name" class="col-form-label">Date de naissance</label>
              <input type="date" class="form-control" placeholder="..." name="date_birth" id="date_birth">
            </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Departement</label>
                <select class="form-select"  id="departement" name="departements">
                  
                </select>
              </div>
              <div class="col-md-6">
              '; if($_SESSION['departement']=='IT'){ echo' 
              <label for="recipient-name" class="col-form-label">Fonction</label>
                <input type="text" class="form-control" name="fonction" id="fonction">
              ';} echo '
            </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                '; if ($_SESSION['departement'] == 'IT'){echo'
                <label for="recipient-name" class="col-form-label">Post</label>
                <input type="text" class="form-control" name="post" id="post">';}echo'
              </div>
              <div class="col-md-6">
              ';if($_SESSION['departement']=='IT'){
                echo'
              <label for="recipient-name" class="col-form-label">Burreaux</label>
                <input type="text" class="form-control" name="bureaux" id="burreaux">
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                ';}if($_SESSION['departement'] == 'IT'){echo'
                <label for="recipient-name" class="col-form-label">Telephone</label>
                <input type="text" class="form-control" name="phone_portable" id="tele_portable">';};echo'
              </div>
              <div class="col-md-6">
              ';if($_SESSION['departement'] == 'IT'){
                echo '
              <label for="recipient-name" class="col-form-label">Extenstion</label>
                <input type="text" class="form-control" name="numero_extenstion" id="extenstion">';}echo'
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
              ';if($_SESSION['departement']=='IT'){echo'
              <label for="recipient-name" class="col-form-label">Fix Direct</label>
                <input type="text" class="form-control" name="numero_fix" id="fix_direct">
                <input type="hidden" value="edit">
                <input type="hidden" value="old_name">
                ';
              }echo'
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden"  name="edit" id="hidden" value="">
        <input type="hidden"  name="old_name" id="old_name" value="">
        <input type="submit" class="btn btn-primary"  value="sauvegarder">
        </form>
      </div>
    </div>
  </div>
</div>
     <!-- edit Modal end -->










    ';
  }
  
  ?>  
    <?php
     if (isset($_GET['submit'])){
        echo '<div class="alert alert-danger" role="alert">
        '.$_GET['submit'].'
      </div>';
      }
      if(isset($_GET['success'])){
        echo '<div class="alert alert-success" role="alert">
        '.$_GET['success'].'
      </div>';
      }

    ?>
     
<!-- delete Modal -->

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <form action="add.php" method="POST">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        êtes-vous sûr de vouloir supprimer cet employe ? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden" id="delete_em" name="delete" value="">
        <input type="submit" class="btn btn-danger" value="Confirmer">
        </form>
      </div>
    </div>
  </div>
</div>


<!-- delete Modal end -->


<!-- employee Status -->
<form action="inc/employee_status.php" method="POST">
<div class="modal fade" id="status_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier status D'employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <select class="form-select" name="status" id="">
              <option value="active">Active</option>
              <option value="Chômage">Chômage</option>
            </select>
          </div>
        </div>
        <div class="row">
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" value="changer" class="btn btn-primary">
        <input type="hidden" name="matricule" id="status_em_hidden" value="">
      </div>
    </div>
  </div>
</div>
</form>

<!-- employee Status end -->






<!-- Ban user -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      changement d'état de compte
      <form method="POST" action="inc/change_account_state.php">
        <div class="row">
      <div class="row">
        <div class="col-md-4">
        <select class="form-select" name="state" aria-label="Default select example">
            <option value="">active</option>
            <option value="desactive">desactive</option>
      </select>
        </div>

      </div>


      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden" id="send_matricule" name="matricule" value="">
        <input type="submit" name="change_state"  class="btn btn-primary" value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>



<!-- Ban user end -->


  <div class="table-responsive mt-4">
     <table id="tab" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>L'état de employés</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Date d'embauche</th>
	            	<th>Address</th>
                <th>Département</th>
                <th>Résponsable</th>
                <th>Fonction</th>
                <th>Post</th>
                <th>Bureaux</th>
                <th>Telephone</th>
                <th>Fix :</th>
                <th>extention</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <!-- <tbody id="ttab">
        </tbody> -->
    </table>
    </div>
  </div> <!-- Parent Box End -->

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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script src="DataTables-Hide-Empty-Columns/dataTables.hideEmptyColumns.js"></script>
<script src="DataTables-Hide-Empty-Columns/dataTables.hideEmptyColumns.min.js"></script>

<?php if(isset($_SESSION['departement'])){
  if($_SESSION['departement']==='IT'){
    echo '<script src="load_notification.js"></script>';
  }
} ?>



<script type="text/javascript">
  // inputs :
let matricule = document.getElementById('matricule');
let photo = document.getElementById('photo');
let firstname = document.getElementById('firstname');
let secondname = document.getElementById("lastname");
let cin = document.getElementById("cin");
let email = document.getElementById('email');
let date_birth = document.getElementById("date_birth");
let date_em = document.getElementById("date_em");
let address = document.getElementById("address");
let departemenet = document.getElementById('departement');
let fonction = document.getElementById("fonction");
let post = document.getElementById("post");
let burreaux = document.getElementById("burreaux");
let telephone = document.getElementById("tele_portable");
let extenstion = document.getElementById("extenstion");
let fix = document.getElementById("fix_direct");
let set_status = (elem)=>{
  let table_elements = elem.parentElement.parentElement.children ; 
  let hidden = document.getElementById('status_em_hidden');
  hidden.value =  table_elements[0].innerText;
  // console.log(table_elements[0].innerText);
}

let set_mat = (elem)=>{
  let matricule = elem.parentElement.parentElement.children[0].innerText ;
  document.getElementById("send_matricule").value= matricule;
}
let edit = (elem)=>{
    let table_elements = elem.parentElement.parentElement.children ; 
    matricule.value =  table_elements[0].innerText;
  
        function find(elm,data){
          for(let i=0;i < data.length;i++){
            if (data[i].matricule == elm){
              return data[i];
            }
          }
        }
        function check_null(elm){
          if (elm == null) {
            elm =  '';
          }
          return elm;
        }
        async function getData(url="http://localhost/puertopme/inc/src.php"){
                let req = await fetch(url,{
                        methd : 'GET',
                        cache : 'no-cache',
                        headers : {
                                'Content-Type' : 'application/json',
                        }
                        });
                        return req.json();
                }

        
        getData().then((data)=>{
          let s = find(table_elements[0].innerText,data);

          switch(s.departement){
        case 'FINANCE': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="IT">IT</option>
                  <option value="RH">RH</option>
                  <option value="FINANCE" selected>FINANCE</option>
                  <option value="QUALITY" selected>QUALITY</option>
                </select>
            `
            break;
        case 'RH': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="IT">IT</option>
                  <option value="RH" selected>RH</option>
                  <option value="FINANCE">Finance</option>
                  <option value="QUALITY" selected>QUALITY</option>
                </select>
            `;
            break;
        case 'IT': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="IT" selected>IT</option>
                  <option value="RH">RH</option>
                  <option value="FINANCE">Finance</option>
                  <option value="QUALITY" selected>QUALITY</option>
                </select>
            `
            break;
            case 'QUALITY': 
            departemenet.innerHTML = `
            <select class="form-select"  id="departement" name="departements">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="IT">IT</option>
                  <option value="RH">RH</option>
                  <option value="FINANCE">Finance</option>
                  <option value="QUALITY" selected>QUALITY</option>
                </select>
            `
            break; 
    }




          (firstname==null)?x=true:firstname.value=check_null(s.firstName);
          (secondname==null)?x=true:secondname.value=check_null(s.lastname);
          (cin==null)?x=true:cin.value=check_null(s.cin);
          (fonction==null)?x=true:fonction.value=check_null(s.fonction);
          (email==null)?x=true:email.value=check_null(s.email);
          (date_birth==null)?x=true:date_birth.value=check_null(s.date_nessance);
          (date_em==null)?x=true:date_em.value=check_null(s.date_em);
          (address==null)?x=true:address.value=check_null(s.address);
          (post==null)?x=true:post.value=check_null(s.post);
          (burreaux==null)?x=true:burreaux.value=check_null(s.burreaux);
          (telephone==null)?x=true:telephone.value=check_null(s.phone_portable);
          (extenstion==null)?x=true:extenstion.value=check_null(s.phone_extenstion);
          (fix==null)?x=true:fix.value=check_null(s.phone_fix);
        });

  

    let old_mat = table_elements[0].innerText;
    document.getElementById("hidden").value=table_elements[0].innerText;
    let old_name = elem.parentElement.parentElement.children[2].innerText;
    document.getElementById("old_name").value =old_name;
    
}
let remove = (elem)=>{
    let old_mat = elem.parentElement.parentElement.children[0].innerText;
    document.getElementById("delete_em").value = old_mat ;
}
</script>
<script type="text/javascript">
   $(document).ready(()=>{
        $("#tab").DataTable({
          stateSave:true,
          scrollY:"600px",
          scrollX:"100%",
          hideEmptyCols: true,
          "responsive":true,
          "ajax":{
            'url':"inc/src.php",
            'method':"get",
            "dataSrc" :"",
          },
          "columns":[
            {data:"matricule","render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
               
                return '<span style="color:#000">'+data+'</span>';
              }else {
                
                return '<span style="color:red">'+data+'</span';
              }
             } 
            },
            {data:"photo",
            "render":function(data){
              return '<img src="'+data+'">'
            }
            },
            {data:"firstName",
              "render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             }
            ,defaultContent:""},
            {data:"lastname","render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             } ,defaultContent:""},
            {data:"etat","render":function(data){
              if(data=="active" || data=="Active"){
                return `<img src="assets/imgs/active_icon.png" style="width:20px;height:20px; object-fit:cover"> `+data;
              }else {
                return `<img src="assets/imgs/chomage.png" style="width:20px;height:20px; object-fit:cover"> `+data;
              }
            },defaultContent:""},
            {data:"cin" ,"render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             } ,defaultContent:""},
            {data:"email" ,"render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return data;
              }
              },defaultContent:""},

            {data:"date_nessance","render": function (data, type, row, meta ){
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
            }
          }
            ,
            {data:"date_em","render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             } ,defaultContent:""},
            {data:"address","render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             }
            ,defaultContent:""},
            {data:"departement","render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             },defaultContent:""},
            {data:"responsable_name" ,"render": function (data, type, row, meta ) {
              if(row.etat==="active" || row.etat == null){
                return data;
              }else {
                return '<span style="color:red">'+data+'</span';
              }
             },defaultContent:""},
            {data:"fonction" ,"render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return data;
              }
              },defaultContent:""},
            {data:"post" ,"render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return data;
              }
              },defaultContent:""},
            {data:"burreaux" ,"render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return '<span style="color:black">'+data+'</span>';
                }
              },defaultContent:""},
            {data:"phone_portable","render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return data;
              }
              },defaultContent:""},
            {data:"phone_fix","render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return data;
              }
              },defaultContent:""},
            {data:"phone_extenstion","render":function(data,type,row,meta){
              if(data=='.....'){
                return innerHTML='<b><span style="color : red">EMPTY</span><b>';
              }else if(row.etat!='active') {
                return '<span style="color : red">'+data+'</span>';
              }else {
                return data;
              }
              },defaultContent:""},
            
  
            {
                data: null,
                className: "dt-center editor-delete",
                defaultContent: `
                <?php if($_SESSION['permission'] != 'none'){
                 echo '<i class="fa fa-pencil btn btn-primary" onclick="edit(this)" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"/>';
                }?>
                
                `,
                orderable: false
            },
            {
              data:null,
              className: "dt-center editor-status",
              defaultContent:`
              <?php 
              
              if($_SESSION['departement']=='RH'){
                echo '<i style="font-size:15px; color:#2d302e;cursor:pointer" onclick="set_status(this)" data-toggle="modal" data-target="#status_modal" class="fa-solid fa-user btn btn-warning"></i>';
              }
              ?>
              `
            }
            ,
            
            {data:null,
              className: "dt-center editor-edit",
                defaultContent: `<?php 
                if($_SESSION['departement'] =='IT'){
                  echo '<i style="font-size:15px; color:#2d302e;cursor:pointer" onclick="set_mat(this)" data-toggle="modal" data-target="#exampleModalLong" class="fa-solid fa-ban btn btn-warning"></i>';
                }
                ?>
                `
            },
            {
                data: null,
                className: "dt-center editor-edit",
                defaultContent: `
                <?php if($_SESSION['permission'] != 'none'){
                 echo '<i class="fa fa-trash btn btn-danger" data-toggle="modal" onclick="remove(this)" data-target="#exampleModal3"/>';
                }?>
                
                `,
                orderable: false
            }

          ],  
        }
        )
   });
   

   fetch('http://localhost/puertopme/inc/user_info.php')
  .then(response => response.json())
  .then(data => document.getElementById("login_photo").src=data[0].photo);


$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tab tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


let url = "http://localhost/puertopme/inc/src.php";
   async function loadNames() {
    const response = await fetch(url);
    const names = await response.json();
   }
   loadNames();

   $('notification-box').on('click', function (event) {
    $(this).parent().toggleClass('open');
});

</script>
</body>
<html>
