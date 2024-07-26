<?php
session_start();
require '../config/db.php';


if (!isset($_SESSION['email'])) {
    header('location:login.php');
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];

    $qry = "Update users set f_name='$f_name', m_name='$m_name', l_name = '$l_name', email = '$email', date_of_birth='$dob', gender = '$gender', address='$address', mobile_number = $mobile_number where id=$id;";

    if (mysqli_query($con, $qry)) {
        header("location:personal_info.php");
    }
}
