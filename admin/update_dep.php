<?php
session_start();
require '../config/db.php';


if (!isset($_SESSION['email'])) {
    header('location:login.php');
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $id1 = $_POST['id1'];

    $qry = "Update departments set name='$name' where id=$id1;";

    if (mysqli_query($con, $qry)) {
        header("location:department.php");
    }
}
