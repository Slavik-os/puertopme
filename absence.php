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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

<style>
    label {
        padding-bottom : 20px;
    }
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
  .main-menu {
      height : 130%;
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
      height :240% !important;
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
  .image-login {
    width:50px;
    height : 50px;
    border-radius :50%;
    object-fit : cover ;
  }
</style>
<?php
session_start();
if(isset($_SESSION['username'])) {
    if ($_SESSION['role']==''){ ?>
<div class="row">
<nav class="navbar navbar_v justify-content-between flex-nowrap" style="background:#212121;border:none;position:; ;width:100% !important; z-index:5;">
<a class="navbar-brand" href="#">
    <img src="assets/imgs/general-icon.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="nav-text" style="font-family:'Titillium Web'"> PUERTO TRANSIT </span>
  </a>
  <div class="dropdown mr-5" style="padding-left: 0 100px">
  <button class="btn btn-secondary dropdown-toggle" style='background:none;border : none;'type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img id="login_photo" class="image-login" src="assets/imgs/default_login.png" alt="">
    <span class="user_id" style="color : #8391A3;"><?php echo $_SESSION['username'];?></span>
  </button>
  <div class="dropdown-menu mt-2 pr-1" aria-labelledby="dropdownMenuButton" ">
    <a class="dropdown-item hover-drop" href="logout.php" ">LOGOUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
  </div>
</div>
</nav>
</div>
<div class="area" ></div>
<nav class="main-menu" style="z-index:1;flex-nowrap">
            <ul>
                <li>
                    <a href="home.php">
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
    <h1 class="txt-header" style="font-family:'Open Sans'">Ajouter une Demande</h1>
    <button type="button" class="btn btn-primary my-3 px-5" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">choisir une demande </button>   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter une Demande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="direct.php" method="POST">
        <div class="row">
              <div class="col-md-6">
                <label for="cars">Type de demande :</label>
                <select name="demands" class="form-select" aria-label="Default select example" id="demands">
                  <option value="DEMAND D'ABSENCE.">DEMAND D'ABSENCE</option>
                  <option value="conge">DEMANDE DE CONGE</option>
                  <option value="mission">ORDRE DE MISSION</option>
                </select>
              </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary"onclick="redirect(this)"  value="OK" >
        <input type="hidden" id="type_demand_page"  name="type_demand" value="" >
        </form>
      </div>
            </div>
        </div>
        </div>
    </div> <!-- Modal end -->
    <?php
        if(isset($_GET['submit'])){
          echo '
                <div class="alert alert-success" role="alert">
                  '.$_GET["submit"].' 
                </div>
                ';
        }
      ?>  
    <!-- conge info -->
    <div class="row m-4">
    <div class="form-group">
        <form method="POST" action="add.php">
        <div class="row">
            <div class="col-md-4">
                <div class="form-check form-switch">
                    <label class="form-check-label" >Motif d’absence :   </label>
                    <input type="text" class="form-control" name="motif_dabsence" id="post">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-2">
                <div class="form-check form-switch">
                <label class="form-check-label" >Date d’absence  :   </label>
                <input type="date" class="form-control" name="date_dabsence_s" id="post">
                </div>
            </div>

            <div class="col-md-2">
                <div class="form-check form-switch">
                <label class="form-check-label" >Date de retour  :   </label>
                <input type="date" class="form-control" name="date_dabsence_r" id="post">
                </div>
            </div>
        </div>

        <div class="row mt-5">
                <div class="col-md-2">
                    <div class="form-check form-switch">
                        <label class="form-check-label" >Heure D'absence  :   </label>
                        <input type="time" class="form-control" name="heur_start" id="post">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-check form-switch">
                        <label class="form-check-label" >Heure de retour  :   </label>
                        <input type="time" class="form-control" name="heur_end" id="post">
                    </div>
                </div>
        </div>
    
              
       
        </div>
        <div class="row mt-5">
                <div class="col-md-3">
                    <label class="form-check-label" for="flexRadioDefault">Personne de remplacement  </label>
                    <input type="text" class="form-control" name="person_replace">
                </div>
        </div>
    
            <div class="col-md-6 mt-5">
            <input type="submit" name="submit_demand" onclick="set_type()" class="form-control btn btn-primary">
            <input type="hidden" value="" id="demand_type" name="demand_type">
            </div>
        </form>
    </div>
    </div>
</div>
            
<script>
    let redirect = (elem)=>{
        let e = $('#demands').val();
        let select_hero = document.getElementById("type_demand_page");
        select_hero.value = e;
    }
    let set_type = ()=>{
        document.getElementById("demand_type").value="";
    }

      
</script>




<?php

    }else {
        header('Location:login.php');
    }
}else{
    header('Location:login.php');
}
    
    ?>
    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script>

fetch('http://localhost/puertopme/inc/user_info.php')
  .then(response => response.json())
  .then(data => document.getElementById("login_photo").src=data[0].photo);
</script>
</body>
<html>
