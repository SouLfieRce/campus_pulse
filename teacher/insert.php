<?php
session_start();
require_once 'vendor/autoload.php';
require 'config/db.php';
ob_start();
if (isset($_POST['submit'])) {
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $role = $_POST['role'];
    $dob= $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobile_number = $_POST['mobile_number'];
    $yos = $_POST['yos'];

    $hashedpassword = password_hash($pass, PASSWORD_DEFAULT);
    if($role == 'Student')
    {
        $role_id = 1;
    }
    if($role == 'Teacher')
    {
        $role_id = 2;
    }
    if($role == 'Admin')
    {
        $role_id = 3;
    }
    $qry = "INSERT INTO users values('','$f_name','$m_name','$l_name','$email','$hashedpassword','$role_id','$dob','$gender','$address','$mobile_number','$yos');";
    if (mysqli_query($con, $qry)) {
        header('location:user.php');
    }
}

$content = ob_get_clean();
include __DIR__ . 'layout/app_layout.php'
?>