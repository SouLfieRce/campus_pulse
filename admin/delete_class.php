<?php
session_start();
require '../config/db.php';
require_once '../vendor/autoload.php';
$dep_id = $_GET['dep_id'];
if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "DELETE FROM classes WHERE id = $id;";
    $result = mysqli_query($con, $qry);
    ?>
    <?php
    header("Location: classes.php?id=$dep_id");
}
?>