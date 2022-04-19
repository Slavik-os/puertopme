<?php
include '../inc/config.php';
if(isset($_SESSION['departement'])) {
  if($_SESSION['departement'] == 'QUALITY'){
    $sql ="SELECT * FROM quality_demands";
    $result = mysqli_query($con,$sql);
   
    while($row = mysqli_fetch_assoc($result)){
        $emparray[] = $row; 
    }
   print_r(json_encode($emparray));
 }

}

?>
