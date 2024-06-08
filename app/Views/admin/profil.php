<?= $this->extend('layouts_admin/template_admin') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <h1 class="m-0">Profil</h1>  
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436180.jpg?t=st=1710469702~exp=1710473302~hmac=ad60764e539294c5c71eff3e8b10350448b7018fbcdbfe0a46aa922f66b3857c&w=740" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $nama; ?></h5>
                        <div class="row card-text pt-2">
                            <div class="col-sm-3">
                                <p>Email :</p>
                            </div>
                            <div class="col-sm">
                                <p><?= $email; ?></p>
                            </div>
                        </div>
                        <div class="tombolEditProfil text-end">
                            <!-- Button Edit Profil -->
                            <button type="button" class="btn p-0 px-1 btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditProfil">Edit Profil</button>
                        </div>
    
                            <!-- Modal Edit Profil-->
                            <div class="modal fade" id="modalEditProfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditProfilLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalEditProfilLabel">Edit Profil</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="namaUser" class="form-label">Nama User</label>
                                                    <input type="text" class="form-control" id="" placeholder="Admin Donor Darah" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="emailUser" class="form-label">Email</label>
                                                    <input type="email" class="form-control" id="" aria-describedby="emailHelp" placeholder="admindonor@gmail.com" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="passwordLama" class="form-label">Password Lama</label>
                                                    <input type="password" class="form-control" id="" placeholder="Masukkan Password Lama">
                                                </div>
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="exampleInputPassword1" class="form-label">Password Baru</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                                        </div>
                                                        <div class="col">
                                                            <label for="exampleInputPassword2" class="form-label">Ulangi Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="button" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>