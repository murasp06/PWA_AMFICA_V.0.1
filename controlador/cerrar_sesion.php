<?php
session_start();
$varsesion = $_SESSION['usuario'];
$_GET['id'];
if(isset($_GET['id'])){
    session_destroy();
    header("location: ../views/login.php");

}else
if($varsesion == null || $varsesion == ''){
    echo 'usted no tiene autorizacion';
    die();
}
 
session_destroy();
header("location: ../views/login.php")
?>