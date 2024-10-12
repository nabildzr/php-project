<?php

$title = 'Edit Staff';
$subTitle = 'Restaurant';

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin-restaurant/conf/function.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/admin-restaurant/conf/connection.php';

?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/admin-restaurant/partials/layouts/layoutTop.php'; ?>

<?php
if (isset($_POST['confirm'])) {
    if (editStaff($_POST) > 0) {
?>
        <script>
            window.location.href = "/admin-restaurant/staff/?alert=20";
        </script>
    <?php    } else { ?>
        <script>
            window.location.href = "/admin-restaurant/staff/edit-staff.php?staff_id=<?= $staffId ?>&alert=21";
        </script>
    <?php
    }
}

if (isset($_GET['staff_id'])) {
    $staffId = $_GET['staff_id'];
    if (empty($_GET['staff_id'])) {
    ?>
        <script>
            window.location.href = "/admin-restaurant/staff/?alert=21";
        </script>
<?php
    } else {
        $data = query("SELECT * FROM staff WHERE staff_id = $staffId")[0];
    }
}

?>


<div class="card basic-data-table">
    <div class="card-header">
        <h5 class="card-title mb-3">Staff</h5>


    </div>
    <div class="card-body">
        <form method="post" action="">


            <div class="col-12">
                <label class="form-label">Staff ID</label>
                <input class="form-control" type="text" value="<?= $staffId ?>" name="staff_id" placeholder="ID" value="<?= $data['staff_name'] ?>" readonly>
            </div>
            <div class="col-12">
                <label class="form-label">Staff Name</label>
                <input type="text" name="staff_name" value="<?= $data['staff_name']?>" placeholder="Name" class="form-control" required>
            </div>
            <div class="col-12">
                <label class="form-label">Staff Email</label>
                <input type="text" name="staff_email" value="<?= $data['staff_email']?>" placeholder="nabildzikrika@gmail.com" class="form-control">
            </div>
          
            <div class="col-12">
                <label class="form-label">Staff Role</label>
                <select name="staff_role" class="form-control">
                    <option value="" hidden><?= $data['staff_role'] ?></option>

                    <!-- mengambil isi/values length dari enum type -->
                    <?php
                    $query = "SHOW COLUMNS FROM staff LIKE 'staff_role'";
                    $result = $conn->query($query);
                    $row = $result->fetch_assoc();
                    $type = $row['Type'];
                    preg_match('/^enum\((.*)\)$/', $type, $matches);
                    $enum = explode(',', $matches[1]);

                    ?>

                    <!-- menerapkan -->
                    <?php foreach ($enum as $value): ?>
                        <option value="<?= trim($value, "'") ?>"><?= trim($value, "'") ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12">
                <label class="form-label">Register Date</label>
                <input type="date" name="register_date" value="<?= $data['register_date'] ?>" class="form-control">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Staff Phone Number</label>
                <input type="number" class="form-control" value="<?= $data['staff_phone'] ?>" name="staff_phone" placeholder="+62 12345678910">
            </div>
            <div class="modal-footer gap-10">
                <a href="index.php">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
                </a>
                <button type="submit" name="confirm" class="btn btn-primary">Confirm</button>
            </div>
        </form>
    </div>
</div>
</div>

<?php
//? Mengambil nilai account_id terbesar dan menginisialisasinya sebagai kodeTerbesar
$query = mysqli_query($conn, "SELECT max(account_id) as kodeTerbesar FROM memberships");

//? Mengambil hasil query sebagai array
$data = mysqli_fetch_array($query);



$idAccount = (int) $data['kodeTerbesar']; //? Mengonversi langsung ke integer

switch ($idAccount) {
        // jika 0 maka ganti ke 1
    case 0:
        $idAccount = 1;
        break;
        // mengembalikan seperti normal
    default:
        $idAccount++;
        break;
}



//? Menggunakan nilai integer langsung tanpa mengonversi ke string
?>


<!-- Modal -->
<div class="modal fade" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="">
                <div class="modal-header">
                    <span class="d-flex gap-2 align-items-center">
                        <iconify-icon icon="gridicons:user-add" class="text-2xl text-primary"></iconify-icon>
                        <h5 class="modal-title" id="exampleModalLabel">Add Membership</h5>

                    </span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Membership Name</label>
                            <input type="text" name="member_name" placeholder="Name" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Account ID</label>
                            <input type="text" class="form-control" name="account_id" value="<?= $idAccount ?>" placeholder="Account ID" readonly>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="addMember" class="btn btn-primary">Add Member</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $script = '<script>
                    let table = new DataTable("#dataTable");
                </script>
                <script>
                var myModal = document.getElementById("myModal");
                var myInput = document.getElementById("myInput");

                myModal.addEventListener("shown.bs.modal", function () {
                myInput.focus()
                });
                </script>
                
                '; ?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/admin-restaurant/partials/layouts/layoutBottom.php'; ?>