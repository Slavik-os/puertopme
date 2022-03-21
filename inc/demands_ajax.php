<?php

require 'config.php';
if (isset($_SESSION['username'])){
    if ($_SESSION['role'] == 'responsable'){
    $id = $_SESSION['id'];
    $departement = $_SESSION['departement'];
    if ($_SESSION['departement'] == 'RH'){
        $sql = "SELECT * FROM demands";

    }else{
    $sql = "SELECT * FROM demands WHERE responsable_id = $id ";
    }
    $result = mysqli_query($con,$sql);
    $emparray = array();
    while($row = mysqli_fetch_assoc($result)){
        $emparray[] = $row; 
    }
    echo json_encode($emparray);



    }
}else {
    header("Location:404");
}


?>