<?php
include 'cnx.php';
session_start();
$idclient = $_SESSION['idclient'];
if(isset($_GET['id'])) {
    $idplante = $_GET['id'];
  $insert="INSERT INTO `panier`(`idutili`, `idpalante`) VALUES
   ('$idclient','$idplante')";
   $res=mysqli_query($cnx,$insert);
   if($res){
  $_SESSION['idcl']=$idclient;
  $_SESSION['idplant']=$idplante;
    header("location: ./client.php");
    exit;
}else echo 'no success';

 }
 
?>
