<?= $this->extend('layouts_admin/template_admin') ?>

<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Rumah Sakit</h1>
                </div>
                <div class="col-sm-6">
                    <!-- Button Tambah Data -->
                    <button type="button" class="btn btn-primary float-sm-right" data-bs-toggle="modal" data-bs-target="#modalTambahRs">
                        <i class="fas fa-plus-square"></i>
                        Tambah Data
                    </button>
                    
                    <!-- Modal Tambah Data -->
                    <div class="modal fade text-left" id="modalTambahRs" tabindex="-1" aria-labelledby="modalTambahRsLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="modalTambahRsLabel">Tambah Data Rumah Sakit</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="namaRs" class="form-label">Nama Rumah Sakit</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="alamatRs" class="form-label">Alamat</label>
                                            <textarea class="form-control" id=""></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="noTelp" class="form-label">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="exampleInputPassword1" class="form-label">Password</label>
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
    <!-- /.content-header -->

    <!-- Tabel Data RS -->
    <div class="container-fluid">
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Rumah Sakit</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>RSU Mitra Sehat</td>
                    <td>KM. 9, Jl. Wates 55295 Argomulyo Daerah Istimewa Yogyakarta</td>
                    <td>+622746498555</td>
                    <td>rsmitrasehat@gmail.com</td>
                    <td>
                        <!-- Button Edit RS -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalEditRs"><i class="fas fa-edit"></i></button>

                        <!-- Modal Edit RS -->
                        <div class="modal fade text-left" id="modalEditRs" tabindex="-1" aria-labelledby="modalEditRsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalEditRsLabel">Edit Data Rumah Sakit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="namaRs" class="form-label">Nama Rumah Sakit</label>
                                                <input type="text" class="form-control" id="" placeholder="RSU Mitra Sehat">
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamatRs" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="" placeholder="KM. 9, Jl. Wates 55295 Argomulyo Daerah Istimewa Yogyakarta"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="noTelp" class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="" placeholder="+622746498555">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="rsmitrasehat@gmail.com">
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleInputPassword1" class="form-label">Password</label>
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
                        
                        <!-- Button Hapus Data -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalHapusRs"><i class="fas fa-trash-alt"></i></button>

                        <!-- Modal Hapus Data-->
                        <div class="modal fade" id="modalHapusRs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalHapusRsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalHapusRsLabel">Hapus Data Rumah Sakit</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yakin ingin menghapus RSU Mitra Sehat?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-primary">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>RS PKU Muhammadiyah Gamping</td>
                    <td>Jalan Wates Km. 5 55294 Gamping Daerah Istimewa Yogyakarta</td>
                    <td>+622746499704</td>
                    <td>pku.gamping@gmail.com</td>
                    <td>
                        <!-- Button Edit RS -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalEditRs"><i class="fas fa-edit"></i></button>

                        <!-- Modal Edit RS -->
                        <div class="modal fade text-left" id="modalEditRs" tabindex="-1" aria-labelledby="modalEditRsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalEditRsLabel">Edit Data Rumah Sakit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="namaRs" class="form-label">Nama Rumah Sakit</label>
                                                <input type="text" class="form-control" id="" placeholder="RS PKU Muhammadiyah Gamping">
                                            </div>
                                            <div class="mb-3">
                                                <label for="alamatRs" class="form-label">Alamat</label>
                                                <textarea class="form-control" id="" placeholder="Jalan Wates Km. 5 55294 Gamping Daerah Istimewa Yogyakarta"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="noTelp" class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="" placeholder="+622746499704">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="pku.gamping@gmail.com">
                                            </div>
                                            <div class="mb-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="exampleInputPassword1" class="form-label">Password</label>
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
                        
                        <!-- Button Hapus Data -->
                        <button type="button" class="btn p-0 px-1" data-bs-toggle="modal" data-bs-target="#modalHapusRs"><i class="fas fa-trash-alt"></i></button>

                        <!-- Modal Hapus Data-->
                        <div class="modal fade" id="modalHapusRs" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalHapusRsLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalHapusRsLabel">Hapus Data Rumah Sakit</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Yakin ingin menghapus RSU Mitra Sehat?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-primary">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>