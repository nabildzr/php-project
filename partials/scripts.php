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
    document.querySelector("#file-upload-name").addEventListener("change", function(event) {
        var fileInput = event.target;
        var fileList = fileInput.files;
        var ul = document.querySelector("#uploaded-img-names");

        // Check if a file has already been uploaded
        if (ul.children.length > 0) {
            alert('You can only upload one image.');
            fileInput.value = ''; // Clear the file input
            return;
        }

        // Add show-uploaded-img-name class to the ul element if not already added
        ul.classList.add("show-uploaded-img-name");

        // Append each uploaded file name as a list item with Font Awesome and Iconify icons
        for (var i = 0; i < fileList.length; i++) {
            var li = document.createElement("li");
            li.classList.add("uploaded-image-name-list", "text-primary-600", "fw-semibold", "d-flex", "align-items-center", "gap-2");

            // Create the Link Iconify icon element
            var iconifyIcon = document.createElement("iconify-icon");
            iconifyIcon.setAttribute("icon", "ph:link-break-light");
            iconifyIcon.classList.add("text-xl", "text-secondary-light");

            // Create the Cross Iconify icon element
            var crossIconifyIcon = document.createElement("iconify-icon");
            crossIconifyIcon.setAttribute("icon", "radix-icons:cross-2");
            crossIconifyIcon.classList.add("remove-image", "text-xl", "text-secondary-light", "text-hover-danger-600");

            // Add event listener to remove the image on click
            crossIconifyIcon.addEventListener("click", (function(liToRemove) {
                return function() {
                    ul.removeChild(liToRemove); // Remove the corresponding list item
                    fileInput.value = ''; // Clear the file input
                };
            })(li)); // Pass the current list item as a parameter to the closure

            // Append both icons to the list item
            li.appendChild(iconifyIcon);

            // Append the file name text to the list item
            li.appendChild(document.createTextNode(" " + fileList[i].name));

            li.appendChild(crossIconifyIcon);

            // Append the list item to the unordered list
            ul.appendChild(li);
        }
    });
    // ================================================ Upload image & show it's name js end ================================================
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