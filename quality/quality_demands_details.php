<?php
include '../inc/config.php';

$sql ="SELECT * FROM quality_demands_detail";
$result = mysqli_query($con,$sql);
$arr = array();
while($row = mysqli_fetch_assoc($result)){
    $arr[] = $row;
}
print_r(json_encode($arr));

?>