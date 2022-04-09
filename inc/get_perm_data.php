<?php
include 'config.php';
$sql = "SELECT firstName ,username, departement FROM employes_tbl WHERE role='responsable'";
$result = mysqli_query($con,$sql);
$perm = array();
while($row = mysqli_fetch_assoc($result)){
    $perm[]= $row;
}
print_r(json_encode($perm));

?>