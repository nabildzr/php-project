<!--start switcher-->
  <button class="btn btn-grd btn-grd-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class="material-icons-outlined">tune</i>Customize
  </button>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-70">
      <div class="">
        <h5 class="mb-0">Theme Customizer</h5>
        <p class="mb-0">Customize your theme</p>
      </div>
      <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
        <i class="material-icons-outlined">close</i>
      </a>
    </div>
    <div class="offcanvas-body">
      <div>
        <p>Theme variation</p>

        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="BlueTheme">
              <span class="material-icons-outlined">contactless</span>
              <span>Blue</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="LightTheme">
              <span class="material-icons-outlined">light_mode</span>
              <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="DarkTheme">
              <span class="material-icons-outlined">dark_mode</span>
              <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="SemiDarkTheme">
              <span class="material-icons-outlined">contrast</span>
              <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label
              class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
              for="BoderedTheme">
              <span class="material-icons-outlined">border_style</span>
              <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->

  <!--bootstrap js-->
  <script src="/admin/assets/js/bootstrap.bundle.min.js"></script>

  <!--plugins-->
  <script src="/admin/assets/js/jquery.min.js"></script>
  <!--plugins-->
  <script src="/admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="/admin/assets/plugins/metismenu/metisMenu.min.js"></script>
  <script src="/admin/assets/plugins/apexchart/apexcharts.min.js"></script>
  <script src="/admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="/admin/assets/plugins/peity/jquery.peity.min.js"></script>
  <script>
    $(".data-attributes span").peity("donut")
  </script>
  <script src="/admin/assets/js/main.js"></script>
  <script src="/admin/assets/js/dashboard1.js"></script>
  <script>
    new PerfectScrollbar(".user-list")
  </script>

</body>

</html>