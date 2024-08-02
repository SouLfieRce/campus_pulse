<?php

require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
$pagetitle = "Add Class";
$id = $_GET['id'];
?>
<div class="container-fluid">
    <div class="row">
        <form action="insert_class.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control form-control-sm" name="name" placeholder="Enter Class Name">
            </div>
            <br>
            <input type="hidden" name="dep_id" value="<?php echo $id ?>">
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
$content = ob_get_clean();
include_once __DIR__ . '/../layout/app_layout.php';
?>