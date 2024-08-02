<?php
session_start();
require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dep_id = $_POST['dep_id'];
    

    
    $qry = "INSERT INTO classes values(' ',$dep_id,'$name','');";
    if (mysqli_query($con, $qry)) {
        header("location:classes.php?id=$dep_id");
    }
}
$content = ob_get_clean();
include __DIR__ . 'layout/app_layout.php'
?>