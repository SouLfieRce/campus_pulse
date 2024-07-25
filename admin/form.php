<?php

require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
$pagetitle = "Add User";
?>
<div class="container-fluid">
    <div class="row">
        <form action="insert.php" method="post">
            <div class="form-group">
                <label for="f_name">First Name:</label>
                <input type="text" class="form-control form-control-sm" name="f_name" placeholder="Enter Your First Name">
            </div>
            <div class="form-group">
                <label for="m_name">Middle Name:</label>
                <input type="text" class="form-control form-control-sm" name="m_name" placeholder="Enter Your First Name">
            </div>
            <div class="form-group">
                <label for="l_name">Last Name:</label>
                <input type="text" class="form-control form-control-sm" name="l_name" placeholder="Enter Your Last Name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control form-control-sm" name="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control form-control-sm" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Role:</label>
                <select class="form-control" name="role">
                    <option>Student</option>
                    <option>Teacher</option>
                    <option>Admin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date of Birth:</label>
                <input type="date" class="form-control form-control-sm" name="dob" placeholder="Date Of Birth">
            </div>

            <label class="form-check-label" for="gender">Gender:</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Male">
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="Female">
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="password">Address:</label>
                <input type="text" class="form-control form-control-sm" name="address" placeholder="Enter password">
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile_number:</label>
                <input type="number" class="form-control form-control-sm" name="mobile_number" placeholder="Enter mobile number">
            </div>
            <div class="form-group">
                <label for="password">Year of Study</label>
                <input type="date" class="form-control form-control-sm" name="yos" placeholder="Enter password">
            </div>
            <br>

            <input type="submit" name="submit" class="btn btn-primary">

        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout.php';
?>