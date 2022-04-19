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
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.13/fc-3.2.2/fh-3.1.2/r-2.1.0/sc-1.4.2/datatables.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<style>
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
    if ($_SESSION['role']=='responsable'){?>

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
        <div class="row">
        <h1 class="txt-header" style="font-family:'Open Sans'">List des demands </h1>
        </div>
     <?
        if(isset($_GET['submit'])){
          echo '
          <div class="alert alert-danger" role="alert">
          '.$_GET['submit'].'
          </div>';
        }
      ?>

<?
        if(isset($_GET['changer'])){
          echo '
          <div class="alert alert-success" role="alert">
          '.$_GET['changer'].'
          </div>';
        }
      ?>
        <div class="table-responsive mt-4">
     <table id="tab" class="display" cellspacing="" width="60%">
        <thead>
            <tr>
              <th></th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Département</th>
                <th>fonction</th>
                <th>Type de demand</th>
                <th>Status</th>
                <th>Status rh</th>
                <th>Date de creation</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
    </table>
    </div>
  </div> <!-- Parent Box End -->
  <!-- Delete demand   -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="add.php" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer cette demande</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       êtes-vous sûr de vouloir supprimer cette demand ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
        <input type="submit" class="btn btn-danger" value="Confrimer" name="delete_record" >
        <input type="hidden" id="delete_demand" name="deleted_demand" value="">
      </div>
      </form>
    </div>
  </div>
</div>      

<!-- Delete demand end -->


     <!-- edit Modal -->
     <div class="modal fade bd-example-modal-lg" id="exampleModal2"="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Details de demand</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="add.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="row mt-2">
              <div class="col-md-4">
                <span>
                <label for="recipient-name" class="col-form-label bold-label">Nom du collaborateur : </label>
                <label for="" id="full_name"></label>
                </span>
              </div>

              <div class="col-md-4">
                <span>
                <label for="recipient-name" class="col-form-label bold-label">Matricule : </label>
                <label for="" id="matricule_employee"></label>
                </span>
              </div>

              <div class="row mt-2">
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Fonction : </label>
                  <label for="" id="fonction"></label>
                  </span>
                </div>
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Departement : </label>
                  <label for="" id="departement"></label>
                  </span>
                </div>
              </div>

              <div class="row mt-5">
              <div class="col-md-12">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Justification  : </label>
                  <label for="" id="justification"></label>
                  </span>
                </div>

              </div>
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Date  : </label>
                  <label for="" id="date_start"></label>
                  </span>
                </div>
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Heur : </label>
                  <label for="" id="heur_start"></label>
                  </span>
                </div>
              </div>

              <div class="row mt-5">
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Date  : </label>
                  <label for="" id="date_end"></label>
                  </span>
                </div>
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Heur : </label>
                  <label for="" id="heur_end"></label>
                  </span>
                </div>
              </div>


              <div class="row mt-5">
                <div class="col-md-4">
                  <span>
                  <label for="recipient-name" class="col-form-label bold-label">Personne de remplacement  : </label>
                  <label for="" id="replacement"></label>
                  </span>
                </div>
              </div>
              <input type="hidden" id="hiddenId" name="demands_id" value="">
              <div class="row mt-5">
              <div class="col-md-4">
              <label for="recipient-name" class="col-form-label bold-label">Status : </label>
              <?
                if($_SESSION['departement'] == 'RH'){
                  echo '   <select class="form-select" name="status" value="Null" aria-label="Default select example">
                  <option selected disabled>changer status</option>
                  <option value="True">approuver</option>
                  <option value="False">déclin</option>
                  <option value="Null">En attendan...</option>
                </select>';
                }else {
                    echo '
                    <select class="form-select" name="status" value="Null" aria-label="Default select example">
                    <option selected disabled>changer status</option>
                    <option value="True">approuver</option>
                    <option value="False">déclin</option>
                    <option value="Null">En attendan...</option>
                  </select>';
                }  
              ?>
            
              </div>
              <div class="row mt-5">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label>Commentaire :</label>
                    <textarea class="form-control" rows="7" name="comment"></textarea>
                  </div>
                </div>
              </div>
            </div>          
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="hidden"  name="edit" id="hidden" value="">
        <input type="submit" name="change_status" class="btn btn-primary"  value="sauvegarder">
        </form>
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.2/js/dataTables.fixedColumns.min.js"></script>
<script type="text/javascript">
   $(document).ready(()=>{
        
        $("#tab").DataTable({
          scrollY:"500px",
          
          "responsive":true,
          "ajax":{
            'url':"inc/demands_ajax.php",
            'method':"post",
            "dataSrc" :"",
          },
          "columns":[
            {data:'demands_id'},
            {data:'matricule_employee'},
            {data:'firstName'},
            {data:'lastname'},
            {data:'departement'},
            {data:'fonction'},
            {data:'type_demand'},
            {data:'status',className:'data',"targets":[1],
                "render":function(data){
                    // if(status===''){
                    //     l = innerHTML = '<b><span style="color : #d1b500">En attendant ...</span><b>';
                    // }else {
                    //     l =' YES';
                    // }
                      if(data=='True'){
                        return innerHTML = '<b><span style="color : green">valider</span><b>';
                      }
                      else if(data=='False'){
                        return innerHTML = '<b><span style="color :red">Decline</span><b>';
                      }
                     else {
                      return innerHTML = '<b><span style="color : #d1b500">En attendant ...</span><b>';
                     }
                }
            },
            {data:'status_rh',className:'data',"targets":[1],
                "render":function(data){
                      if(data=='True'){
                        return innerHTML = '<b><span style="color : green">valider</span><b>';
                      }
                      else if(data=='False'){
                        return innerHTML = '<b><span style="color :red">Decline</span><b>';
                      }
                     else {
                      return innerHTML = '<b><span style="color : #d1b500">En attendant ...</span><b>';
                     }
                }
            },
            {data:'created_date'},
            {
                data: null,
                className: "dt-center editor-delete",
                defaultContent: '<i class="fa fa-pencil btn btn-primary" onclick="get_info(this)" id="edit" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"/>',
                orderable: false
            },
        {data: null,
                className: "dt-center editor-delete",
                defaultContent: '<i class="fa fa-trash btn btn-danger" onclick="set_demand(this)" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat"/>',
                orderable: false}
          ],  
        }
        )});


        
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tab tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});

let data_obj;
fetch('inc/demands_ajax.php')
  .then(response => response.json())
  .then((data)=>{  
    data_obj = data;
  });


let get_info= (elem)=>{
  let tr = elem.parentElement.parentElement;
    let table = $('#tab').DataTable();
    $("#tab tbody").unbind().on("click","tr td",(e)=>{
        let index = table.row(e.currentTarget).index();
        let current_data =  data_obj[index] ;
        console.log(current_data);
        document.getElementById("full_name").innerText = current_data.firstName+' '+current_data.lastname;
        document.getElementById("matricule_employee").innerText = current_data.matricule_employee;
        document.getElementById("fonction").innerText = current_data.fonction;
        document.getElementById("departement").innerText = current_data.departement;
        document.getElementById("justification").innerText = current_data.justification;
        document.getElementById("date_start").innerText = current_data.date_start;
        document.getElementById("date_end").innerText = current_data.date_end;
        document.getElementById("heur_start").innerText = current_data.heur_start;
        document.getElementById("heur_end").innerText = current_data.heur_end;
        document.getElementById("replacement").innerText = current_data.replacement;
        document.getElementById("hiddenId").value = current_data.demands_id;

    });
}


  function set_demand(elem){
    id = elem.parentElement.parentElement.children[0].innerText ;
    document.getElementById("delete_demand").value=id;    
  }


  fetch('http://localhost/puertopme/inc/user_info.php')
.then(response => response.json())
.then(data => document.getElementById("login_photo").src=data[0].photo);
</script>

</body>
<html>
