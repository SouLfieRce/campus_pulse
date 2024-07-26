<?php
if (!isset($_SESSION['email'])) {
  header('location:/project/login.php');
}
?>
<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="index.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>
        <?php if($_SESSION['role_id'] > 1)
        { ?>
        <a class="nav-link" href="user.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Users
        </a>
        <?php } ?>
        <?php if($_SESSION['role_id'] == 1)
        { ?>
        <a class="nav-link" href="personal_info.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Personal
        </a>
        <?php } ?>
        <a class="nav-link" href="../login.php">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Login
        </a>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      <?php echo $_SESSION['name'];
      if ($_SESSION['role_id'] == 1) {
        echo "(Student)";
      }
      if ($_SESSION['role_id'] == 2) {
        echo "(Teacher)";
      }
      if ($_SESSION['role_id'] == 3) {
        echo "(Admin)";
      }
      ?>
    </div>
  </nav>
</div>