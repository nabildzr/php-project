<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/partials/layouts/layout-top.php';
require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/admin/conf/function.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/register/reg-check.php';

if (isset($_SESSION['isLogin']) == true) {
?>
    <script>
        window.location.href = "../index.php"
    </script>
<?php
}

?>

<?php

if (isset($_POST['registernow'])) {
    if ($_POST['password'] != $_POST['passwordCheck']) {
?>
        <script>
            window.location.href = "/restaurant/register/?reg=-1";
        </script>
    <?php
        return false;
    }

  

    if (register($_POST) > 0) {
    ?>
        <script>
            window.location.href = "/restaurant/login/?reg=1";
        </script>

    <?php
    } else {

    ?>
        <script>
            window.location.href = "/restaurant/login/?reg=0";
        </script>

<?php
    }
}

?>



<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="https://themeholy.com/html/pizzan/demo/assets/img/update_2/bg/breadcumb_bg_2.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Register</h1>
            <ul class="breadcumb-menu">
                <li><a href="/restaurant/">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
    </div>
</div>


<!--==============================
Register Area
==============================-->

<?php
// mengambil nilai member_id terbesar dan menginisialisasinya sebagai kodeTerbesar
// untuk digunakan sebagai id baru pada tabel memberships
$newMemberId = getNextAvailableMemberID();

// mengambil nilai account_id terbesar dan menginisialisasinya sebagai kodeTerbesar
// untuk digunakan sebagai id baru pada tabel accounts
$newAccountId = getNextAvailableAccountID();

?>

<div class="th-checkout-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="woocommerce-form-login-toggle">
            <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to Register</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="post" action="" class="woocommerce-form-login mb-30">
                    <input type="text" name="account_id" value="<?= $newAccountId ?>" hidden>
                    <input type="text" name="member_id" value="<?= $newMemberId ?>" hidden>
                    <div class="form-group">
                        <label>Username *</label>
                        <input type="text" name="member_name" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="form-group position-relative">
                        <label>Password *</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group position-relative">
                        <label>Password Check *</label>
                        <input type="password" id="passwordCheck" name="passwordCheck" class="form-control" placeholder="Re-enter Password" required>
                        <span id="passwordMatchIcon" style="letter-spacing: 3px; top: 100px;" class="position-absolute end-0 top-50 translate-middle-y me-3 "></span>
                    </div>
                    <div class="form-group">
                        <div class="custom-checkbox">
                            <input type="checkbox" id="rememberplease">
                            <label for="rememberplease">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="registernow" class="th-btn rounded-2">Login</button>
                        <p class="fs-xs mt-2 mb-0"><a class="text-reset" href="#">Lost your password?</a></p>
                        <p class="fs-xs mt-2 mb-0"><a class="text-reset" href="/restaurant/login/">Already have an Account?</a></p>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php
$script = '
<script>
    // memvalidasi apakah password dan konfirmasi password sama
    document.getElementById("password").addEventListener("input", validatePassword);
    document.getElementById("passwordCheck").addEventListener("input", validatePassword);

    function validatePassword() {
        // mendapatkan nilai password dan konfirmasi password
        var password = document.getElementById("password").value;
        var passwordCheck = document.getElementById("passwordCheck").value;
        var icon = document.getElementById("passwordMatchIcon");

        // jika konfirmasi password kosong maka tidak perlu memvalidasi
        if (passwordCheck === "") {
            icon.className = "";
            return;
        }

        

        // jika password dan konfirmasi password sama (cocok) maka tampilkan icon check
        if (password === passwordCheck) {
            icon.innerHTML = "    Correct!  ";
            icon.className = "fa fa-check-circle text-success";
        } else {
            // jika password dan konfirmasi password tidak sama (tidak cocok) maka tampilkan icon times
            icon.innerHTML = "   Try Again!    ";
            icon.className = "fa fa-times-circle text-danger";
        }
    }
</script>';

echo $script;
?>
<!-- footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/partials/layouts/layout-footer.php' ?>