<?= $this->extend('layouts_rs/template_rs') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="m-0">Dashboard</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $total_pendonor ?></h3>

            <p>Stok Darah Tersedia</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="stok" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= $total_pendonor ?></h3>

            <p>Jumlah Pendonor</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="pendonor" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>