<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436180.jpg?t=st=1710469702~exp=1710473302~hmac=ad60764e539294c5c71eff3e8b10350448b7018fbcdbfe0a46aa922f66b3857c&w=740" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $nama; ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        
          <li class="nav-header">Data</li>
          <li class="nav-item">
            <a href="datars" class="nav-link">
              <i class="nav-icon fas fa-hospital"></i>
              <p>
                Rumah Sakit
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="datastok" class="nav-link">
              <i class="nav-icon fas fa-medkit"></i>
              <p>
                Stok Darah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="datapendonor" class="nav-link">
              <i class="nav-icon fas fa-syringe"></i>
              <p>
                Pendonor
              </p>
            </a>
          </li>
          <li class="nav-header">Profil</li>
          <li class="nav-item">
            <a href="profiladmin" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('login/logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Keluar</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>