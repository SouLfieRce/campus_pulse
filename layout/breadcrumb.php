<?php
if (!isset($_SESSION['email'])) {
    header('location:/project/login.php');
}
?>
<h1 class="mt-4">
    <?php echo $pagetitle ?? '' ?>
</h1>