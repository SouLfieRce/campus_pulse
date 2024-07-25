<?php
ob_start();
require '../config/db.php';
$pagetitle="Users";
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
                <th>Gender</th>
                <th>Mobile Number</th>
                <th>Edit</th>
                <th>Delete</th>
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
                    <!-- <td><?php echo $rows['password']; ?></td> -->
                    <td><?php echo $rows['gender']; ?></td>
                    <td><?php echo $rows['mobile_number']; ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>

                        <a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>

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