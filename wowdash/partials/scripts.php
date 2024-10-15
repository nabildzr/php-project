<!-- jQuery library js -->
<script src="assets/js/lib/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js -->
<script src="assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Apex Chart js -->
<script src="assets/js/lib/apexcharts.min.js"></script>
<!-- Data Table js -->
<script src="assets/js/lib/dataTables.min.js"></script>
<!-- Iconify Font js -->
<script src="assets/js/lib/iconify-icon.min.js"></script>
<!-- jQuery UI js -->
<script src="assets/js/lib/jquery-ui.min.js"></script>
<!-- Vector Map js -->
<script src="assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
<script src="assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
<!-- Popup js -->
<script src="assets/js/lib/magnifc-popup.min.js"></script>
<!-- Slick Slider js -->
<script src="assets/js/lib/slick.min.js"></script>
<!-- prism js -->
<script src="assets/js/lib/prism.js"></script>
<!-- file upload js -->
<script src="assets/js/lib/file-upload.js"></script>
<!-- audioplayer -->
<script src="assets/js/lib/audioplayer.js"></script>

<script>
    // =============================== Upload Single Image js start here ================================================
    const fileInput = document.getElementById("upload-file");
    const imagePreview = document.getElementById("uploaded-img__preview");
    const uploadedImgContainer = document.querySelector(".uploaded-img");
    const removeButton = document.querySelector(".uploaded-img__remove");

    fileInput.addEventListener("change", (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            imagePreview.src = src;
            uploadedImgContainer.classList.remove("d-none");
        }
    });
    removeButton.addEventListener("click", () => {
        imagePreview.src = "";
        uploadedImgContainer.classList.add("d-none");
        fileInput.value = "";
    });
    // =============================== Upload Single Image js End here ================================================

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

    // ================================================ Upload image & show it"s name js start  ================================================
    document.getElementById("file-upload-name").addEventListener("change", function(event) {
        var fileInput = event.target;
        var fileList = fileInput.files;
        var ul = document.getElementById("uploaded-img-names");

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
    // ================================================ Upload image & show it"s name js end ================================================
</script>

<!-- main js -->
<script src="assets/js/app.js"></script>
<?php echo (isset($script) ? $script   : '') ?>