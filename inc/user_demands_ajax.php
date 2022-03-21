<?php

require 'config.php';
if (isset($_SESSION['username'])){
    $id = $_SESSION['id'];
    $departement = $_SESSION['departement'];
    $sql = "SELECT * FROM demands WHERE employee_id = $id ";
    $result = mysqli_query($con,$sql);
    $emparray = array();
    while($row = mysqli_fetch_assoc($result)){
        $emparray[] = $row; 
    }
    echo json_encode($emparray);
}else {
    header("Location:404");
}


?>