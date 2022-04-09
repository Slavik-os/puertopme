<?php
include 'config.php';
$comment = $_POST['comment'];
$status  = $_POST['status'];
$matricule = $_POST['matricule'];
$responsable_name = $_SESSION['firstName'];
$today_date = date("Y-m-d");
// get employee info
$sql = "SELECT firstname,lastname FROM employes_tbl WHERE matricule='$matricule'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
    $first_name = $row['firstname']; 
    $last_name = $row['lastname'];
}

$sql ="INSERT INTO employee_status VALUES(
    '$matricule','$responsable_name','$status','$first_name','$last_name','$comment','$today_date'
)";
mysqli_query($con,$sql);

// change employee status 

$sql ="UPDATE employes_tbl SET etat='$status' WHERE matricule='$matricule'";
mysqli_query($con,$sql);
header("Location:../index.php?success=Modifier Success !")
?>