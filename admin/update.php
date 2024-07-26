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
    $role = $_POST['role'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
    $yos = $_POST['yos'];

    if ($role == 'Student') {
        $role_id = 1;
    }
    if ($role == 'Teacher') {
        $role_id = 2;
    }
    if ($role == 'Admin') {
        $role_id = 3;
    }


    $qry = "Update users set f_name='$f_name', m_name='$m_name', l_name = '$l_name', email = '$email', role_id = $role_id, date_of_birth='$dob', gender = '$gender', address='$address', mobile_number = $mobile_number, year_of_study='$yos' where id=$id;";

    if (mysqli_query($con, $qry)) {
        header("location:user.php");
    }
}
