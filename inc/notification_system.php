<?php
include 'config.php';

if(isset($_SESSION['departement'])){
  if($_SESSION['departement']==='IT'){

        $info = array();
        $sql = "SELECT * FROM employee_status";

        $result = mysqli_query($con,$sql);

        while($row=mysqli_fetch_assoc($result)){
          $info[] = $row;
        }

        echo json_encode($info);
  }
}

?>
