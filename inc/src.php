<?php
require 'config.php';
if (isset($_SESSION['username'])){
    if ($_SESSION['role'] == 'responsable'){

$depr = $_SESSION['departement'];
$sql ="DROP TABLE IF EXISTS puerto_dbs.departments ;CREATE TABLE departments( SELECT id,firstName,lastName,departement FROM employes_tbl WHERE role='responsable');";
$result = mysqli_query($con,$sql);
if ($depr =='IT' || $depr == 'RH'   ) {
    $sql = "SELECT departments.firstName as responsable_name , employes_tbl.matricule,employes_tbl.username ,employes_tbl.photo,
    employes_tbl.firstName ,employes_tbl.lastname,employes_tbl.etat ,employes_tbl.cin,employes_tbl.email,employes_tbl.date_em,
    employes_tbl.departement ,employes_tbl.fonction ,employes_tbl.burreaux ,employes_tbl.post ,
    employes_tbl.phone_portable,employes_tbl.phone_extenstion,employes_tbl.phone_fix,
    employes_tbl.address FROM departments INNER JOIN employes_tbl ON departments.departement = employes_tbl.departement";

}else {
    $name = $_SESSION['firstName'];
    $sql = "SELECT allowed_permitiion FROM permissions WHERE responsable_depar  = '$name'";
    $result = mysqli_query($con,$sql);
    // print_r($result);
    $l = array();
    $p ='';
    while($row = mysqli_fetch_assoc($result)){
        $l = preg_split ("/\,/",$row['allowed_permitiion']);
    }
    
    foreach ($l as $value) {
        $p .= ','.$value;
      }

    # if permissions are empty reset the string query 
    ($p == '')?$p .=',':'';

    // query to format
    $sql = "SELECT departments.firstName as responsable_name , employes_tbl.matricule ,employes_tbl.photo,
    employes_tbl.firstName ,employes_tbl.lastname,employes_tbl.cin $p
    employes_tbl.address FROM departments INNER JOIN employes_tbl  ON '$depr' = employes_tbl.departement";
    
}
// echo $p;
$result = mysqli_query($con,$sql);
$emparray = array();

while($row = mysqli_fetch_assoc($result)){
    $emparray[] = $row; 
}
function unique_multidimensional_array($array, $key) {
    $temp_array = array();
    $i = 0;
    $key_array = array();

    foreach($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
            $temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}

$tmp_arr = [] ;
foreach(unique_multidimensional_array($emparray,'matricule') as $em) {
    array_push($tmp_arr,$em);
}
print_r(json_encode($tmp_arr));
    }
}else {
    header("Location:404");
}

?>
