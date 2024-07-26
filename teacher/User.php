<?php
ob_start();
require '../config/db.php';
$pagetitle = "Users";
?>
<div class="header d-flex justify-content-between align-items-center">
    <div style="text-align: right;">
        <a href="form.php" class="btn btn-sm btn-success">Add User</a>
    </div>
</div>
<?php
$qry = "SELECT * FROM USERS;";
$result = mysqli_query($con, $qry);
?>
<section>
    <table class="table table-stripped table-borderrer">
        <tr>
            <th>ID</th>
            <th>F_Name</th>
            <th>M_Name</th>
            <th>L_Name</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Mobile Number</th>
            <th>Year of Study</th>
        </tr>
        <?php
        session_start();
        while ($rows = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['f_name']; ?></td>
                <td><?php echo $rows['m_name']; ?></td>
                <td><?php echo $rows['l_name']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['role_id']; ?></td>
                <td><?php echo $rows['date_of_birth']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                <td><?php echo $rows['gender']; ?></td>
                <td><?php echo $rows['mobile_number']; ?></td>
                <td><?php echo $rows['year_of_study']; ?></td>

            </tr>
        <?php
        }
        ?>
    </table>
</section>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/../layout/app_layout.php';
?>