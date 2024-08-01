<?php
ob_start();
session_start();
require '../config/db.php';
$pagetitle = "Attendance";
?>
<?php
$id  = $_SESSION['id'];

$qry = "SELECT date,status FROM attendance where user_id = $id order by date;";
$result = mysqli_query($con, $qry);

?>
<a href="daily_report.php" class="btn btn-sm btn-primary">Daily report</a>
<a href="specific_report.php" class="btn btn-sm btn-primary">Specific Duration report</a>
<section>
    <table class="table table-stripped table-borderrer">
        <tr>
            <th>Date</th>
            <th>Status</th>

        </tr>
        <?php
        while ($rows = $result->fetch_assoc()) { ?>
            <tr>

                <td><?php echo $rows['date']; ?></td>
                <td><?php echo $rows['status']; ?></td>
            </tr>
        <?php }
        ?>
    </table>
</section>
<?php

$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout.php';
?>