<?php
session_start();
require '../config/db.php';
require_once '../vendor/autoload.php';

if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "DELETE FROM users WHERE id = $id;";
    $result = mysqli_query($con, $qry);
    mysqli_close($con);
    header("Location: user.php");
}
?>