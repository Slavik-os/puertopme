<?php
include '../inc/config.php';

if(isset($_SESSION['departement'])){
  if($_SESSION['departement'] === 'QUALITY'){
      $demand_id = $_GET['demand_id'];
      $action =  $_GET['action'];
      $demand_delai = $_GET['demand_delai'];

      # get info 
      $sql = "SELECT * FROM quality_demands WHERE id = $demand_id";
      $result = mysqli_query($con,$sql);

      while($row = mysqli_fetch_assoc($result)){
        $demand_name = $row['name'];
      }
      
      $sql = "INSERT INTO quality_demands_detail
      (demand_id,demand_description,demand_responsable_name,demand_delai)
      VALUES(
        $demand_id,'$action','$demand_name','$demand_delai'
      )";
      mysqli_query($con,$sql);
      header('Location:../action_damilioration.php?submit=Success!');

      
  }
}
else {
  header("Location:../404");

}


?>
