<?php
include_once './cnx.php';
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM `catégorie` WHERE id_cat=$id ";
    $res=mysqli_query($cnx,$delete);
    if($res){
        // echo ' success';
        header("location: ./categorie.php");
        exit;
    }else echo 'no success';
}

if(isset($_GET['dellet'])){
    $id=$_GET['dellet'];
    $delete="DELETE FROM `plantes` WHERE idplante=$id ";
    $res=mysqli_query($cnx,$delete);
    if($res){
         echo ' success';
         header("location: ./plant.php");
         exit;
    }else echo 'no success';
}
if(isset($_GET['delletcommand'])){
    $id=$_GET['delletcommand'];
    $delete="DELETE FROM `commande` WHERE idcommande=$id ";
    $res=mysqli_query($cnx,$delete);
    if($res){
         echo ' success';
         header("location: ./commande.php");
         exit;
    }else echo 'no success';
}

?>