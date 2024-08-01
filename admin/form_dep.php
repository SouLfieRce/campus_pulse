<?php

require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
$pagetitle = "Add User";
?>
<div class="container-fluid">
    <div class="row">
        <form action="insert_dep.php" method="post">
            <div class="form-group">
                <label for="f_name">ID:</label>
                <input type="number" class="form-control form-control-sm" name="id" placeholder="Enter id">
            </div>
            <div class="form-group">
                <label for="f_name">First Name:</label>
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Department Name">
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