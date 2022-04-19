<?php
require 'config.php';
if(isset( $_POST['password']) && isset($_POST['username'])){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $username = mysqli_real_escape_string($con,test_input($_POST['username']));
      $password = mysqli_real_escape_string($con,test_input($_POST['password']));
      
      if (empty($username) ){
          header("Location:../login.php?error=Nom d'utilisateur requis !");
      } elseif (empty($password)){
        header("Location:../login.php?error=Mode de pass requis !");
      }
      else {
         $password = md5($password);
         $sql = "SELECT username,password,lastname,firstName,matricule,
         id,role,departement,fonction,status FROM employes_tbl WHERE username = '$username'  AND 
                 password = '$password'";
                 echo $sql;
         $result = mysqli_query($con,$sql);
         if(mysqli_num_rows($result) === 1){
             $row = mysqli_fetch_assoc($result);
             if($row['password']==$password && $row['username']=== $username){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['departement'] = $row['departement'];
                $_SESSION['fonction'] = $row['fonction'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['matricule'] = $row['matricule'];
                $_SESSION['status'] = $row['status'];
                $status = $row['status'];
                if($status == ""){
                  header("Location:../redirect.php");
                }else {
                  header("Location:../login.php?error=Not activated !");
             
                }
                
              }
              // Check if user can edit => 
              $firstName = $_SESSION['firstName'];
              $sql = "SELECT total_access FROM permissions WHERE responsable_depar='$firstName'";
              $result = mysqli_query($con,$sql);
              while($row = mysqli_fetch_assoc($result)){
                $_SESSION['permission'] = $row['total_access'];
            }
            if(mysqli_num_rows($result) == 0){
              $_SESSION['permission'] = 'none';
            }
            ($_SESSION['departement']=='IT')?$_SESSION['permission'] ='edit/delete':'';


         } else {
            header("Location:../login.php?error=le nom d'utilisateur/mot de passe n'est pas correct !");
         }
      }
      
}else {
    header("Location : ../login.php");
}

?>