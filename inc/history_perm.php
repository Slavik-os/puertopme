<?php
include 'config.php';
if (isset($_SESSION['username'])){
    if ($_SESSION['departement'] == 'IT'){
        $sql ="SELECT * FROM permissions";
        $result = mysqli_query($con,$sql);
        $perm = array();
        while($row = mysqli_fetch_assoc($result)){
            $perm[] = $row ;
        }
        print_r(json_encode($perm));
    }
}
        else {
            header("Location:../logout.php");
        }
?>