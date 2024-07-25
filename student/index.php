<?php

require_once '../vendor/autoload.php';
require '../config/db.php';
ob_start();
$pagetitle = "Dashboard";
?>
<div class="wrapper">
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-top-0 border-end-0 border-bottom-0 border-primary border-2 text-center mb-4 shadow py-4 bg-success">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                Total Users:
                                <?php
                                $sql = "SELECT * FROM users;";
                                $run = mysqli_query($con, $sql);
                                $total = mysqli_num_rows($run);
                                echo $total;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-top-0 border-end-0 border-bottom-0 border-primary border-2 text-center mb-4 shadow py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                Active Users:
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-top-0 border-end-0 border-bottom-0 border-primary border-2 text-center mb-4 shadow py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                hello
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-top-0 border-end-0 border-bottom-0 border-primary border-2 text-center mb-4 shadow py-4">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                hello
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout.php';
?>