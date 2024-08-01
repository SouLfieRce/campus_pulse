<?php
session_start();

require '../config/db.php';
ob_start();
$qry = "SELECT * FROM USERS where role_id=1;";
$result = mysqli_query($con, $qry);

if (isset($_POST['submit'])) {

        $date = $_POST['date'];
        $data = $_POST['status'];
        foreach ($data as $student_id =>$status) {
            $qry = "INSERT INTO attendance values('','$student_id','$date','$status');";
            $result = mysqli_query($con, $qry);

        }
        if($result){
            header("location:attendance.php");
        }
}
