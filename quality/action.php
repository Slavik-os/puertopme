<?php
include '../inc/config.php';

if(isset($_SESSION['departement'])){
  if($_SESSION['departement'] ==='QUALITY'){
   $name = $_SESSION['firstName'];
   $service = $_SESSION['fonction'];
   $type = $_GET['type'];
   $description = $_GET['description'];
   $correction = $_GET['corrections'];
   $recherche = $_GET['recherche'];
   $date =  date("Y-m-d");
   $sql = "
     INSERT INTO quality_demands (name,service,date_creation,visa,demand_type,
     description,correction,cause)VALUES(    
     '$name','$service','$date',' ','$type','$description',
     '$correction','$recherche'
    )
   ";
    $result = mysqli_query($con,$sql);
    header('Location:../action_damilioration.php?submit=Success!');

     



  }
}else {header('Locaiton: ../404');}

?>
