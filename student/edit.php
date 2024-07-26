<?php
require '../config/db.php';
ob_start();
session_start();
$id = $_GET['id'];
$qry = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($con, $qry);
$user = mysqli_fetch_assoc($result);
?>

<div class="row">
    <h2>Update</h2>
    <p>Please fill this form to edit an User.</p>
    <form action="update.php" method="post">
        <div class="form-group">
            <label for="f_name">First Name:</label>
            <input type="text" class="form-control" name="f_name" value="<?php echo $user['f_name']; ?>">
        </div>
        <div class="form-group">
            <label for="m_name">Middle Name:</label>
            <input type="text" class="form-control" name="m_name" value="<?php echo $user['m_name']; ?>">
        </div>
        <div class="form-group">
            <label for="l_name">Last Name:</label>
            <input type="text" class="form-control" name="l_name" value="<?php echo $user['l_name']; ?>">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $user['email']; ?>">
        </div>

        <div class="form-group">
            <label for="date">Date of Birth:</label>
            <input type="date" class="form-control form-control-sm" name="dob" value="<?php echo $user['date_of_birth']; ?>">
        </div>
        <div class="form-group">
            <label>Gender:</label><br>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" value="Male" <?php echo $user['gender'] == 'Male' ? 'checked' : ''; ?>>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="gender" value="Female" <?php echo $user['gender'] == 'Female' ? 'checked' : ''; ?>>
                <label class="form-check-label" for="female">Female</label>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Address:</label>
            <input type="text" class="form-control form-control-sm" name="address" value="<?php echo $user['address']; ?>">
        </div>
        <div class="form-group">
            <label for="Mobile_NO">Mobile Number:</label>
            <input type="text" class="form-control" name="mobile_number" value="<?php echo $user['mobile_number']; ?>">
        </div>
        <br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <br>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>

<?php
$content = ob_get_clean();
include __DIR__ . '/../layout/app_layout.php';
?>