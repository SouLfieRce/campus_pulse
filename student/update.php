<?php
session_start();
require 'vendor/autoload.php';

require 'config/db.php';


if(!isset($_SESSION['email']))
{
    header('location:login.php');
}

if (isset($_GET['update'])) {

    $id = $_GET['id'];
    $f_name1 = $_GET['f_name'];
    $l_name1 = $_GET['l_name'];
    $email1 = $_GET['email'];
    $gender1 = $_GET['gender'];
    $mobile_number1 = $_GET['mobile_number'];

    

    $qry = "Update users set f_name='$f_name1', l_name = '$l_name1', email = '$email1', gender = '$gender1', mobile_number = $mobile_number1 where id=$id;";

    if (mysqli_query($con, $qry)) {
        header("location:user.php");
    }
}
