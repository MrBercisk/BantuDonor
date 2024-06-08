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