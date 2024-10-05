<!-- jQuery library js -->
<script src="/admin-restaurant/assets/js/lib/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js -->
<script src="/admin-restaurant/assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Apex Chart js -->
<script src="/admin-restaurant/assets/js/lib/apexcharts.min.js"></script>
<!-- Data Table js -->
<script src="/admin-restaurant/assets/js/lib/dataTables.min.js"></script>
<!-- Iconify Font js -->
<script src="/admin-restaurant/assets/js/lib/iconify-icon.min.js"></script>
<!-- jQuery UI js -->
<script src="/admin-restaurant/assets/js/lib/jquery-ui.min.js"></script>
<!-- Vector Map js -->
<script src="/admin-restaurant/assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
<script src="/admin-restaurant/assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
<!-- Popup js -->
<script src="/admin-restaurant/assets/js/lib/magnifc-popup.min.js"></script>
<!-- Slick Slider js -->
<script src="/admin-restaurant/assets/js/lib/slick.min.js"></script>
<!-- prism js -->
<script src="/admin-restaurant/assets/js/lib/prism.js"></script>
<!-- file upload js -->
<script src="/admin-restaurant/assets/js/lib/file-upload.js"></script>
<!-- audioplayer -->
<script src="/admin-restaurant/assets/js/lib/audioplayer.js"></script>

<!-- sweetalertsssss -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>

<!-- main js -->
<script src="/admin-restaurant/assets/js/app.js"></script>

<?php
/* 
1. $_GET['success'] yang di gunakan untuk memeriska apakah ada param success pada url
2. Jika ada param success maka nilai yang ada pada parameter tersebut akan di ambil dan disimpan pada var $x dan pada var $x nilai yang sudah di dapatkan akan di konversi menjadi integer menggunakan intval()
3. kemudian akan ditampilkannya alert dengan menggunakan echo yang dimana ditampilkannya itu adalah script js 
4. document.addEventListener('DOM...) digunakan untuk memastikan script akan dijalankan setelah ter reload
5. inisialisasi var x didalam script js yang sudah didapatkan menggunakan php ($x)
*/

if (isset($_GET['alert'])) {
    $x = intval($_GET['alert']);
    echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            var x = $x;
            if (x == 1) {
                    Swal.fire({
                    icon: 'success',
                    text: 'Member Successfully Deleted',
                              showConfirmButton: false,

                    timer: 1500,
                    position: 'bottom-end'
                });
            } else if (x == 2) {
                Swal.fire({
                    icon: 'success',
                    text: 'Member Successfully Added',
                              showConfirmButton: false,

                    timer: 1500,
                    position: 'bottom-end'
                });
            } else if (x == 3) {
                Swal.fire({
                    icon: 'success',
                    text: 'Data Successfully Updated',
                    customClass: {
                        popup: 'swal2-popup',
                        title: 'swal2-title',
                        content: 'swal2-content',
                        confirmButton: 'swal2-confirm'
                    }
                });
            } else if (x == 4) {
                Swal.fire({
                    icon: 'error',
                    text: 'Member Unsuccessfully Added',
                    timer: 1500,
                    showConfirmButton: false
                });
            }
        });
    </script>";
}

?>
<?php echo (isset($script) ? $script   : '') ?>