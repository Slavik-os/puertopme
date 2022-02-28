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
  td img {
    width : 50px;
    height : 50px;
    border-radius : 50%;
    object-fit : contain ;
  }
  table th , table td {
    font-size : 12px;
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
  @media screen and (max-width:700px) {
    body {
    
    }
    .main-menu {
      height :130%;
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
    <img src="assets/imgs/default_login.png" alt=""> 
    <span class="user_id" style="color : #8391A3;"><?php echo $_SESSION['username'];?></span>
  </button>
  <div class="dropdown-menu mt-2 pr-1" aria-labelledby="dropdownMenuButton" ">
    <a class="dropdown-item hover-drop" href="#" ">LOGOUT <i class="fa-solid fa-arrow-right-from-bracket"></i></a>
  </div>
</div>
</nav>
</div>
<div class="area" ></div>
<nav class="main-menu" style="z-index:1;flex-nowrap">
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
    <h1 class="txt-header">Ajouter des Employés</h1>
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
        <form>
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
                <label for="recipient-name" class="col-form-label">Date d'embauche:</label>
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
                <input type="file" class="form-control" placeholder="..." name="photo">
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
                <input type="phone" class="form-control" placeholder="..." name="numero_extenetsion">
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
                <select class="form-select" aria-label="Default select example" name="departement">
                  <option selected disabled>Selectionner une Département</option>
                  <option value="It">IT</option>
                  <option value="Rh">RH</option>
                  <option value="Finance">Finance</option>
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
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
        </div>
      </div>
      </div>
     </div> <!-- modal End -->
     <!-- Add employee Modal End!-->
      
     <!-- edit Modal -->
     <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
     <!-- edit Modal end -->

<!-- delete Modal -->

<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- delete Modal end -->


      <div class="table-responsive mt-4">
     <table id="tab" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>CIN</th>
                <th>Email</th>
	            	<th>Address</th>
                <th>Département</th>
                <th>Résponsable</th>
                <th>Fonction</th>
                <th>Post</th>
                <th>Bureaux</th>
                <th>Numero</th>
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
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript">
   $(document).ready(()=>{
        $("#tab").DataTable({
          "ajax":{
            'url':"inc/src.php",
            'method':"post",
            "dataSrc" :"",
          },
          "columns":[
            {data:"matricule"},
            {data:"photo"},
            {data:"firstName"},
            {data:"lastname"},
            {data:"cin"},
            {data:"email"},
            {data:"address"},
            {data:"departement"},
            {data:"responsable_name"},
            {data:"fonction"},
            {data:"post"},
            {data:"burreaux"},
            {data:"phone_portable"},
            {
                data: null,
                className: "dt-center editor-delete",
                defaultContent: '<i class="fa fa-pencil" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat"/>',
                orderable: false
            },{
                data: null,
                className: "dt-center editor-edit",
                defaultContent: '<i class="fa fa-trash"  data-toggle="modal" data-target="#exampleModal3"/>',
                orderable: false
            }            
          ],  
        }
        )});
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tab tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
<html>
