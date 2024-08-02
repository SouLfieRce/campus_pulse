<?php
session_start();
require '../config/db.php';


if (!isset($_SESSION['email'])) {
    header('location:login.php');
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dep_id = $_POST['dep_id'];


    $qry = "Update classes set name='$name' where id=$id;";

    if (mysqli_query($con, $qry)) {
        header("location:classes.php?id=$dep_id");
    }
}
