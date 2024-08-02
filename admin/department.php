<?php
ob_start();
require '../config/db.php';
$pagetitle="Departments";
?>
    <div class="header d-flex justify-content-between align-items-center">
        <div style="text-align: right;">
            <a href="form_dep.php" name= "department"class="btn btn-sm btn-success">Add</a>
        </div>
    </div>
    <?php
    $qry = "SELECT * FROM departments;";
    $result = mysqli_query($con, $qry);
    ?>
    <section>
        <table class="table table-stripped table-borderrer">
            <tr>
                <th>Name</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Classes</th>
            </tr>
            <?php
            session_start();
            while ($rows = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $rows['name']; ?></td>
                    <td>
                        <form action="toggle_status_dep.php" method="post" class="status-toggle-form">
                            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="status" role="switch" id="statusSwitch<?php echo $rows['id']; ?>" <?php echo $rows['status'] == 'Active' ? 'checked' : ''; ?> onchange="this.form.submit()">
                                <label class="form-check-label" for="statusSwitch<?php echo $rows['id']; ?>"><?php echo $rows['status'] == 'Active' ? 'Active' : 'Inactive'; ?></label>
                                <input type="hidden" name="dep_id" value="<?php echo $id; ?>">
                            </div>
                        </form>
                    </td>
                    <td>
                        <a href="edit_dep.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>

                        <a href="delete_dep.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                    <td>

                        <a href="classes.php?id=<?php echo $rows['id']; ?>" class="btn btn-sm btn-success">Classes</a>
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