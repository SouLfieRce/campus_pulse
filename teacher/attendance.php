<?php
ob_start();
require '../config/db.php';
$pagetitle = "Attendance";
$qry = "SELECT * FROM USERS where role_id=1;";
$result = mysqli_query($con, $qry);
?>
<section>
    <form action="attendance_report.php" method="post"> 
        <div class="col-md-2">
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control form-control-sm" name="date" placeholder="Date" required>
            </div>
        </div>
        <table class="table table-stripped table-borderrer">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Present</th>
                <th>Absent</th>
            </tr>
            <?php
            session_start();
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['id']; ?></td>
                    <td><?php echo $rows['f_name'] . ' ' . $rows['l_name']; ?></td>

                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status[<?php echo $rows['id'];?>]" value="Present" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status[<?php echo $rows['id'];?>]" value="Absent" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            </label>
                        </div>
                        
                    </td>

                </tr>
                <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            <?php
            }
            ?>

        </table>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout.php';
?>