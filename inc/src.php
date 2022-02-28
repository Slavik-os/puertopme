<?php
require 'config.php';
$sql ="DROP TABLE IF EXISTS puerto_dbs.departments ;CREATE TABLE departments( SELECT id,firstName,lastName,departement FROM employes_tbl WHERE role='responsable');";
$result = mysqli_query($con,$sql);
$sql = 'SELECT departments.firstName as responsable_name , employes_tbl.matricule ,employes_tbl.photo, employes_tbl.firstName ,employes_tbl.lastname,employes_tbl.cin,employes_tbl.email,employes_tbl.departement ,employes_tbl.fonction ,employes_tbl.burreaux ,employes_tbl.post ,employes_tbl.phone_portable ,employes_tbl.address FROM departments INNER JOIN employes_tbl  ON departments.departement = employes_tbl.departement ';
$result = mysqli_query($con,$sql);
$emparray = array();
while($row = mysqli_fetch_assoc($result)){
    $emparray[] = $row; 
    // echo '<tr>';
    // echo '<td>'.$row['matricule'].'</td>';
    // echo '<td>'.$row['photo'].'</td>';
    // echo '<td>'.$row['firstName'].'</td>';
    // echo '<td>'.$row['lastname'].'</td>';
    // echo '<td>'.$row['cin'].'</td>';
    // echo '<td>'.$row['email'].'</td>';
    // echo '<td>'.$row['address'].'</td>';
    // echo '<td>'.$row['departement'].'</td>';
    // echo '<td>'.$row['responsable_name'].'</td>';
    // echo '<td>'.$row['fonction'].'</td>';
    // echo '<td>'.$row['burreaux'].'</td>';
    // echo '<td>'.$row['post'].'</td>';
    // echo '<td>'.$row['phone_portable'].'</td>';
    // echo "<td><i class='fa fa-edit'><i> <i class='fa fa-trash'></i></td>";
}

echo json_encode(
    $emparray
)

?>
