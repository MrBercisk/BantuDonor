<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/adminlte/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- UIkit CSS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.0/dist/css/uikit.min.css" /> -->
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styleUser.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="wrapper">

    <!-- Navbar -->
    <?= $this->include('layouts_rs/navbar') ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?= $this->include('layouts_rs/sidebar') ?>

    <!-- Content Wrapper. Contains page content -->
    <?= $this->renderSection('content') ?>
    <!-- /.content-wrapper -->




    <footer class="main-footer ">
      <strong>&copy Bantu Donor</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/assets/adminlte/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="/assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/adminlte/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="/assets/adminlte/dist/js/demo.js"></script> -->
  <!-- UIkit JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.19.2/dist/js/uikit-icons.min.js"></script> -->
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const deleteButtons = document.querySelectorAll('.delete-btn');

      deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
          event.preventDefault();

          Swal.fire({
            title: 'Anda yakin akan menghapus data?',
            text: "Jika yakin silahkan klik tombol Hapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = button.getAttribute('href');
            }
          });
        });
      });
    });
  </script>

  <script>
    <?php if (session()->has('sweet_alert')) : ?>
      var sweetAlertData = <?= session('sweet_alert') ?>;
      Swal.fire({
        icon: sweetAlertData.success ? 'success' : 'error',
        title: sweetAlertData.message,
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
      });
    <?php endif; ?>
  </script>
</body>

</html>