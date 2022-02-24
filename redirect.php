<?php
session_start();
if(isset($_SESSION['username'])) {
    if ($_SESSION['role']=== 'responsable') {
        header('Location:index.php');
    }else {
        header('Location:home.php');
    }
}
else {
    echo '403 <br>you think you smart ;) ?';
}

?>