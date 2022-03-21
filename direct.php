<?php
session_start();
if($_SESSION['username'] ==''){
    header("Location:logout.php");
}
echo $_POST['type_demand'];
 switch ($_POST['type_demand']){
    case 'conge' :
        header("Location:conge.php");
        $_SESSION['demand'] = 'DEMANDE DE CONGE';
        break;
    case 'mission' :
        header("Location:mission.php");
        $_SESSION['demand'] = 'ORDRE DE MISSION';
        break;
    case "DEMAND D'ABSENCE." :
        header("Location:absence.php");
        $_SESSION['demand'] = "DEMAND D'ABSENCE.";
        break;
 }
?>