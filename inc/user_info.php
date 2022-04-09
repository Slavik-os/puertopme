<?php

include 'config.php';

$sql = "
   SELECT username , photo from employes_tbl WHERE username='".$_SESSION['username']."' 
";
$emparray = array();
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($result)){
    $emparray[] = $row; 
}
print_r(
    json_encode($emparray)
);

?>