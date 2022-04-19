<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    .image-login {
        width:50px;
        height :50px;
        border-radius : 50%;
        object-fit : fit;
    }
</style>
<body>
<?php
session_start();
if(isset($_SESSION['departement'])){
    if($_SESSION['departement'] !== 'IT'){header("Location:logout.php");}
    }?>
    <div class="row">
<nav class="navbar navbar_v justify-content-between flex-nowrap" style="background:#212121;border:none;position:; ;width:100% !important; z-index:5;">
<a class="navbar-brand" href="#">
    <img src="assets/imgs/general-icon.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <span class="nav-text" style="font-family:'Titillium Web'"> PUERTO TRANSIT </span>
  </a>
  <div class="dropdown mr-5" style="padding-left: 0 100px">
  <button class="btn btn-secondary dropdown-toggle" style='background:none;border : none;'type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <img id="login_photo" class="image-login" src="assets/imgs/default_login.png" alt="">
    <span class="user_id" style="color : #8391A3"> <?php echo $_SESSION['username'].' / '.$_SESSION['departement'];?></span>
  </button>
  <div class="dropdown-menu mt-2 pr-1" aria-labelledby="dropdownMenuButton" >
    <a class="dropdown-item hover-drop" href="logout.php" >LOGOUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
</div>
</div>
</nav>
</div>
<div class="area" ></div>
<nav class="main-menu" style="z-index:1;flex-nowrap">
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
            if(isset($_GET['submit'])){
                echo '
                    <div class="alert alert-success" role="alert">
                        '.$_GET['submit'].'
                    </div>
                ';
            }
        
        ?>
<h1 class="txt-header" style="font-family:'Open Sans'">Changement des permissions</h1>
<form action="inc/change_perm.php" method="POST">
<div class="row mt-4">
    <div class="col-md-4">
        <select name="depar" class="form-select"  required aria-label="Default select example" id="responsable_list">
            <option selected disabled value=""  departement">Selectioner l'utilisateur</option>
        </select>
    </div>
</div>
<div class="row mt-3">
<h1 class="txt-header" style="font-family:'Open Sans'">Permissions read/write</h1>
<div class="row">

<div class="col-md-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="perm" value="edite/delete" id="flexRadioDefault1" required>
  <label class="form-check-label" for="flexRadioDefault1">
    Edite / Supprimer
  </label>
</div>
</div>
<div class="col-md-2">
<div class="form-check">
  <input class="form-check-input" type="radio" name="perm" value="none" id="flexRadioDefault1" >
  <label class="form-check-label" for="flexRadioDefault1">
    None
  </label>
</div>
</div>

</div>


    <h1 class="txt-header" style="font-family:'Open Sans'">Choisir des permissions</h1>
    <div class="row">
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="date_em" type="checkbox" name="allowed[]">
            <label class="form-check-label" for="flexSwitchCheckDefault">Date d'embauche</label>
        </div>
    </div>
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="burreaux" type="checkbox" name="allowed[]" >
            <label class="form-check-label" for="flexSwitchCheckDefault">burreaux</label>
        </div>
    </div>
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="post" type="checkbox" name="allowed[]">
            <label class="form-check-label" for="flexSwitchCheckDefault">post</label>
        </div>
    </div>
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="address" type="checkbox" name="allowed[]">
            <label class="form-check-label" for="flexSwitchCheckDefault">address</label>
        </div>
    </div>
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="phone_portable" type="checkbox" name="allowed[]">
            <label class="form-check-label" for="flexSwitchCheckDefault">Telephone portable</label>
        </div>
    </div>
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="phone_fix" type="checkbox" name="allowed[]">
            <label class="form-check-label" for="flexSwitchCheckDefault">Telephone Fix</label>
        </div>
    </div>
    <div class="col-md-2 m-3">
        <div class="form-check form-switch">
            <input class="form-check-input" value="phone_extenstion" type="checkbox" name="allowed[]">
            <label class="form-check-label" for="flexSwitchCheckDefault">Extenstion</label>
        </div>
    </div>

    <div class="row mt-5">
        <input type="hidden" id="hidden"  value="" name="user_perm" >
        <input type="submit" onclick="submitHide()" class="btn btn-primary" name="submit_perm">
    </div>
</div>
</form>
<div class="table-responsive mt-4">
     <table id="tab" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Fait Par </th>
                <th>Utilisateur</th>
                <th>Permissions appliquer</th>
                <th>Accees</th>
            </tr>
        </thead>
        <!-- <tbody id="ttab">
        </tbody> -->
    </table>
    </div>

<script>
   let url = "http://localhost/puertopme/inc/get_perm_data.php";

    function append_users(data){
        let id = document.getElementById("responsable_list");
        for (let i = 0; i< data.length;i++){
            let option = document.createElement("option");
            option.innerHTML = `
                <option name="depar" departement" value="${data[i].firstName}" >${data[i].firstName} / ${data[i].departement} </option>
            `;
            id.appendChild(option);
        }
    }
    async function loadNames() {
    const response = await fetch(url);
    const names = await response.json();
    append_users(names);
}
loadNames();

function submitHide(){
    let hidden = document.getElementById("hidden");
    var select = document.getElementById('responsable_list');
    var value = select.options[select.selectedIndex].value;
    var value = value.substring(0, value.lastIndexOf("/"));
    hidden.value= value;
}



</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script src="DataTables-Hide-Empty-Columns/dataTables.hideEmptyColumns.js"></script>
<script src="DataTables-Hide-Empty-Columns/dataTables.hideEmptyColumns.min.js"></script>


<script type="text/javascript">

   $(document).ready(()=>{
    $("#tab").DataTable({
        stateSave:true,
          "responsive":true,
          "ajax":{
            'url':"inc/history_perm.php",
            'method':"post",
            "dataSrc" :"",
          },"columns":[
              {data:"responsable_name"},
              {data:"responsable_depar"},
              {data:"allowed_permitiion"},
              {data:"total_access"}
          ]

    })
       
   });
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tab tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


fetch('http://localhost/puertopme/inc/user_info.php')
  .then(response => response.json())
  .then(data => document.getElementById("login_photo").src=data[0].photo);

</script>
</body>
<html>


</script>
</body>
</html>