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
         $sql = "SELECT * FROM employes_tbl WHERE username = '$username'  AND 
                 password = '$password'";
         $result = mysqli_query($con,$sql);
         if(mysqli_num_rows($result) === 1){
             $row = mysqli_fetch_assoc($result);
             if($row['password']==$password && $row['username']=== $username){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['firstName'] = $row['firstName'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['departement'] = $row['departement'];
                header("Location:../redirect.php");
              }
         } else {
            header("Location:../login.php?error=le nom d'utilisateur/mot de passe n'est pas correct !");
         }
      }
      
}else {
    header("Location : ../login.php");
}

?>