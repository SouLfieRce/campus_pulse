<?php
ob_start();
session_start();

require_once 'vendor/autoload.php';
require_once 'config/db.php';
if (isset($_SESSION['email'])) {
    if ($_SESSION['role_id'] == 1) {
        header('location:student/index.php');
    }
    if ($_SESSION['role_id'] == 2) {
        header('location:teacher/index.php');
    }
    if ($_SESSION['role_id'] == 3) {
        header('location:admin/index.php');
    }
}
else{
    header('location:login.php');
}
