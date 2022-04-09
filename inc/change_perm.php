<?php
include 'config.php';
$user = $_SESSION['username'];
$depar = $_POST['user_perm'];
$allowed = $_POST['allowed'];
$perm = $_POST['perm'];
$p ='';
forEach($allowed as $v){
    $p .= $v.',';
}
// echo $p;
if(isset($_POST['submit_perm'])){
    // remove previous permissions because only one perm is allowed
    $sql ="DELETE FROM permissions WHERE  responsable_depar  LIKE '$depar'"; 

    mysqli_query($con,$sql);
    $sql ="INSERT INTO permissions VALUES(
        '$user','$depar','$p','$perm'
    )";
   
    mysqli_query($con,$sql);
    header("Location:../perm.php?submit=Modifier !");
}

?>