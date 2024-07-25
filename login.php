<?php
ob_start();
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                    <form action="verify.php" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputEmail" name="email" type="text" placeholder="name@example.com" required />
                            <label for="inputEmail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="inputPassword" name="password" type="text" placeholder="Password" required />
                            <label for="inputPassword">Password</label>
                        </div>

                        <p class="text-danger"><b><?php if (isset($_SESSION['error'])) {
                                                        echo $_SESSION['error'];
                                                        unset($_SESSION['error']);
                                                    } ?></b></p>
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="password.html">Forgot Password?</a>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();

include_once __DIR__ . '/layout/guest_layout.php';
?>