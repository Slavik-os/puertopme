<?php
include 'config.php';

if($_SESSION['departement']){
    if($_SESSION['departement']==='IT'){

if(isset($_POST['change_state'])){
    $status= $_POST['state'];
    $matricule = $_POST['matricule'];
    if($status=='Null'){
        $status = Null;
    }
   
        $sql ="UPDATE employes_tbl SET status ='$status' WHERE matricule='$matricule'";
        mysqli_query($con,$sql);
        header("Location:../index.php?success=Modifier !");
        }
    }
}

?>