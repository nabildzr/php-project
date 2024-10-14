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

<script>
    // ================================================ Upload Multiple image js Start here ================================================
    const fileInputMultiple = document.getElementById("upload-file-multiple");
    const uploadedImgsContainer = document.querySelector(".uploaded-imgs-container");

    fileInputMultiple.addEventListener("change", (e) => {
        const files = e.target.files;

        Array.from(files).forEach(file => {
            const src = URL.createObjectURL(file);

            const imgContainer = document.createElement("div");
            imgContainer.classList.add("position-relative", "h-120-px", "w-120-px", "border", "input-form-light", "radius-8", "overflow-hidden", "border-dashed", "bg-neutral-50");

            const removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.classList.add("uploaded-img__remove", "position-absolute", "top-0", "end-0", "z-1", "text-2xxl", "line-height-1", "me-8", "mt-8", "d-flex");
            removeButton.innerHTML = '<iconify-icon icon="radix-icons:cross-2" class="text-xl text-danger-600"></iconify-icon>';

            const imagePreview = document.createElement("img");
            imagePreview.classList.add("w-100", "h-100", "object-fit-cover");
            imagePreview.src = src;

            imgContainer.appendChild(removeButton);
            imgContainer.appendChild(imagePreview);
            uploadedImgsContainer.appendChild(imgContainer);

            removeButton.addEventListener("click", () => {
                URL.revokeObjectURL(src);
                imgContainer.remove();
            });
        });

        // Clear the file input so the same file(s) can be uploaded again if needed
        fileInputMultiple.value = "";
    });
    // ================================================ Upload Multiple image js End here  ================================================
</script>

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
                // menu
            } else if (x == 10) {
                Swal.fire({
                    icon: 'success',
                    text: 'Menu successfully Added',
                    timer: 1500,
                    showConfirmButton: false
                });
            } else if (x == 11) {
                Swal.fire({
                    icon: 'error',
                    text: 'Menu Unsuccessfully Added',
                    timer: 1500,
                    showConfirmButton: false
                });
                // membership
            } else if (x == 20) {
                Swal.fire({
                    icon: 'success',
                    text: 'Successfully Edited',
                    timer: 1500,
                    showConfirmButton: false
                })
            } else if (x == 21) {
                Swal.fire({
                    icon: 'error',
                    text: 'Something went wrong',
                    timer: 1500,
                    showConfirmButton: false
                })
            }
        });
    </script>";
}

?>
<?php echo (isset($script) ? $script   : '') ?>