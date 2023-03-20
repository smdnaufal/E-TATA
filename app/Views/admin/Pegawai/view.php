<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Daftar Pegawai</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#tambah-data"><i class="fa-solid fa-user-plus me-2"></i>Tambah Data</button>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Nama Lengakap</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>198609262015051</td>
                            <td>Andreas johan</td>
                            <td>cobaaja@gmail.com</td>
                            <td>082353373130</td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-data" data-nip="198609262015051" data-nama="Andraes Johan" data-email="cobaaja@gmail.com" data-no="082353373130"><i class="fa-solid fa-pen-to-square "></i></a>

                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-data" data-nama="Andraes Johan"><i class="fa-solid fa-trash"></i></a>

                                <a href="/admin/pegawai/profil_pegawai" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl rotateInDownLeft animated ">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pegawai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="panel-body">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="ktp_mhs">Nip :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="ktp_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="nim_mhs">Nama Lengkap :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nim_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                                                <div class="col-sm-8"><select id="jk_mhs" class="form-control select2" style="width: 100%;">
                                                        <option value="-" selected="selected">---</option>
                                                        <option value="L">Laki laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="almt_mhs">Alamat :</label>
                                                <div class="col-sm-8">
                                                    <textarea id="smk_almt" name="almt_mhs" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" id="email_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="notlp_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                                <div class="col-sm-8"><select id="agama_mhs" class="form-control select2">
                                                        <option value="-" selected="selected">---</option>
                                                        <option value="muslim"></option>
                                                        <option value="kristen">Ketua</option>
                                                        <option value="hindu">Pegawai</option>
                                                        <option value="budha">KepaUa Tu</option>
                                                        <option value="konghucu">Ketua Bidang Infomasi</option>
                                                        <option value="lainnya">Kepala Balai</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Foto</label>
                                                    <input type="hidden" name="foto_lama" id="foto_lama">
                                                    <input type="file" name="foto" id="foto" class="form-control">
                                                </div>
                                            </div>
                                            <div class="modal-footer ">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data">
                                                <a href="reset" class="btn btn-warning">Reset</a>
                                                <a  class="btn btn-danger" data-dismiss="modal">Batal</a>
                                            </div><!-- /.box-footer -->
                                        </div> <!-- /.end row -->
                                    </div> <!-- /.end panel -->
                                </div> <!-- /.end content -->
                        </form><!-- /.end form -->
                    </div>
                </div> <!-- /.end modal-dialog -->
            </div> <!-- /.end modal fate -->

            <div class="modal fade" id="edit-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl rotateInDownLeft animated ">
                    <form>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pegawai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="panel-body">
                                <div class="row ">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="ktp_mhs">Nip :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="ktp_mhs" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="nim_mhs">Nama Lengkap :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nim_mhs" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                                            <div class="col-sm-8"><select id="jk_mhs" class="form-control select2" style="width: 100%;">
                                                    <option value="-" selected="selected">---</option>
                                                    <option value="L">Laki laki</option>
                                                    <option value="P">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="almt_mhs">Alamat :</label>
                                            <div class="col-sm-8">
                                                <textarea id="smk_almt" name="almt_mhs" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="email_mhs" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="notlp_mhs" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                            <div class="col-sm-8"><select id="agama_mhs" class="form-control select2">
                                                    <option value="-" selected="selected">---</option>
                                                    <option value="muslim"></option>
                                                    <option value="kristen">Ketua</option>
                                                    <option value="hindu">Pegawai</option>
                                                    <option value="budha">KepaUa Tu</option>
                                                    <option value="konghucu">Ketua Bidang Infomasi</option>
                                                    <option value="lainnya">Kepala Balai</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Foto</label>
                                                <input type="hidden" name="foto_lama" id="foto_lama">
                                                <input type="file" name="foto" id="foto" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">
                                            <a href="reset" class="btn btn-warning">Reset</a>
                                            <a  class="btn btn-danger" data-dismiss="modal">Batal</a>
                                        </div><!-- /.box-footer -->
                                    </div> <!-- /.end row -->
                                </div> <!-- /.end panel -->
                            </div> <!-- /.end content -->
                    </form><!-- /.end form -->
                </div>
            </div> <!-- /.end modal-dialog -->
        </div> <!-- /.end modal fate -->

        <div class="modal fade" id="delete-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin akan menghapus <span id="delete-nama">Nama</span>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div><!-- /.end modal-dialog -->
        </div><!-- /.end modal fate -->

        


    </div> <!-- End of Main Content -->
</div> <!-- End of Content Wrapper -->

<?= $this->endSection(); ?>