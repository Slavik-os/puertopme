<?php
session_start();
if(isset($_SESSION['departement'])){
    if($_SESSION['departement'] === 'QUALITY'){
?>

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
                    <a href="quality/">
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
  <form  method="GET" action="quality/action.php" >
  <h1 class="txt-header mb-5" style="font-family:'Open Sans'">FICHE  ACTIONS  D'AMELIORATION (AA)</h1>
     <?php
      if(isset($_GET['submit'])){
        echo '
        <div class="alert alert-success" role="alert">
        '.$_GET['submit'].'
      </div>
        ';
      }
     ?>
    <div class="row">
    <div class="form-group">
      <div class="col-md-6">
      <h1 class="txt-header" style="font-family:'Open Sans'">I-1 TYPE DE NON-CONFORMITE </h1>
      <select class="form-select" name="type" aria-label="Default select example"  required>
      <option selected disabled value="">Open this select menu</option>
      <option value="Réclamation interne">Réclamation interne</option>
      <option value="Réclamation externe (Client)">Réclamation externe (Client)</option>
      <option value="Auto-détection">Auto-détection</option>
      <option value="Suggestion & Amélioration">Suggestion & Amélioration	</option>
      <option value="Autre, à préciser">Autre, à préciser</option>
</select>
    </div>
    </div>
   
    <h1 class="txt-header" style="font-family:'Open Sans'"> I-2 DESCRIPTION DU DYSFONCTIONNEMENT RELEVÉ </h1>
    <div class="col-md-4">
    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="....."></textarea>
    </div>

    <h1 class="txt-header" style="font-family:'Open Sans'">II- CORRECTIONS (effectuées pour débloquer la situation)</h1>
    <div class="col-md-4">
    <textarea class="form-control" name="corrections" id="exampleFormControlTextarea1" rows="3" placeholder="....."></textarea>
    </div>


    <h1 class="txt-header" style="font-family:'Open Sans'">III- RECHERCHE ET ANALYSE DES CAUSES</h1>
    <div class="col-md-4">
    <textarea class="form-control" name="recherche" id="exampleFormControlTextarea1" rows="3" placeholder="....." ></textarea>
    </div>
  <div class="row mt-5">
  <input type="submit" class="btn btn-primary" value="créer l'action">
  </div>
  </form>

  <div class="table-responsive mt-4">
     <table id="tab" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>type</th>
                <th>date</th>
                <th>Fait par</th>
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

</div>

<!-- Edit Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="GET" action="quality/edit_demand.php">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:18px;">IV- MISE EN PLACE DES ACTION(S) CORRECTIVE(S)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <label for="exampleInputPassword1">Décisions / Actions</label>
         <div class="col-md-6"> <textarea class="form-control" name="action" id="exampleFormControlTextarea1" rows="3" placeholder="....." required></textarea></div>
        </div>
        <div class="row mt-4">
        <div class="col-md-6">
        <label for="exampleInputPassword1">Date (delai)</label>
          <input class="form-control" type="date" name="demand_delai">
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
        <input id="hidden"   name="demand_id" value="" type="hidden">
      </div>
    </div>
    </form>
  </div>
</div>
<!-- Edit Modal End -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script src="DataTables-Hide-Empty-Columns/dataTables.hideEmptyColumns.js"></script>
<script src="DataTables-Hide-Empty-Columns/dataTables.hideEmptyColumns.min.js"></script>
<script src="js_templetes/quality_actiion.js"></script>
<?php if(isset($_SESSION['departement'])){
  if($_SESSION['departement']==='IT'){
    echo '<script src="load_notification.js"></script>';
  }
} ?>



<script type="text/javascript">

</script>
<script type="text/javascript">
    $(document).ready(()=>{
        $("#tab").DataTable({
          stateSave:true,
          scrollY:"200px",
          scrollX:"100%",
          hideEmptyCols: true,
          "responsive":true,
          "ajax":{
            'url':"quality/demands_details.php",
            'method':"get",
            "dataSrc" :"",
          },
          "columns":[
           {data:'id'},
           {data:'demand_type'},
           {data:'date_creation'},
           {data:"name"},
           {data: null,
                className: "dt-center editor-edit",
                defaultContent: `<i class="fa-solid fa-edit btn btn-primary" onclick="edit_action(this)" data-toggle="modal" data-target="#exampleModal"></i>`
          },
          {data: null,
                className: "dt-center editor-edit",
                defaultContent: `<i class="fa-solid fa-print btn btn-info" onclick="generate_pdf(this)"></i>`
          },
          {data: null,
                className: "dt-center editor-edit",
                defaultContent: `<i class="fa-solid fa-trash btn btn-danger " onclick="edit_action(this)" data-toggle="modal" data-target="#exampleModal"></i>`
          }
          ],
        }
        )
   });


   function find(elm,data){
          for(let i=0;i < data.length;i++){
            if (data[i].id == elm){
              return data[i];
            }
    }
  }

  function findAction(elm,data){
          let arr = [];
          for(let i=0;i < data.length;i++){
            if (data[i].demand_id == elm){
              arr.push(data[i]);
            }
            
    }
    return arr;
  }



function generate_pdf(elm){
  // save data from fetch
  let arr_data  ;
  let arr_action  ;
  let id = elm.parentElement.parentElement.children[0].innerText;
  async function getData(url="http://localhost/puertopme/quality/demands_details.php"){
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
                    
                    let result = find(id,data);
                    arr_data = result ;
                 });
                 async function getAction(url="http://localhost/puertopme/quality/quality_demands_details.php"){
                let req = await fetch(url,{
                        methd : 'GET',
                        cache : 'no-cache',
                        headers : {
                                'Content-Type' : 'application/json',
                        }
                        });
                          return req.json();
                }
                getAction().then((data)=>{
                    // generate new page
                    let result = findAction(id,data)
                    arr_action = result;
                    
                     // generate new page
                    let w = window.open("");
                    w.document.writeln(action_damilioration(arr_data,arr_action));
                   
                    
                 });
                       
                   
}


function edit_action(elm){
  let id = elm.parentElement.parentElement.children[0].innerText;
  async function getData(url="http://localhost/puertopme/quality/demands_details.php"){
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
                  let s = find(id,data);
                  let hidden = document.getElementById("hidden");
                  hidden.value= s.id;
                 });


              
}
   

        
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
</html>


<?php
    }
}
else {

   header("Location:../404");
}
?>