<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
<div class="flash-salah" data-flashdata="<?= session()->getFlashdata('salah'); ?>"></div>
<div class="flash-hapus" data-flashdata="<?= session()->getFlashdata('hapus'); ?>"></div>
<div class="flash-ubah" data-flashdata="<?= session()->getFlashdata('ubah'); ?>"></div>
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
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($query as $q) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $q['nip']; ?></td>
                            <td><?= $q['nama_lengkap']; ?></td>
                            <td><?= $q['email']; ?></td>
                            <td><?= $q['no_hp']; ?></td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square "></i></a>

                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-data"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl rotateInDownLeft animated ">
                        <form method="post" action="/admin/PegawaiController/save">
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
                                                    <input type="number" name="nip" class="form-control" id="ktp_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="nim_mhs">Nama Lengkap :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama_lengkap" class="form-control" id="nim_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="nim_mhs">Password :</label>
                                                <div class="col-sm-8">
                                                    <input type="password" name="password" class="form-control" id="nim_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                                                <div class="col-sm-8"><select id="jk_mhs" required name="gender" class="form-control select2" style="width: 100%;">
                                                        <option value="" disabled selected="selected">Pilih Jenis Kelamin</option>
                                                        <option value="Pria">Laki laki</option>
                                                        <option value="Wanita">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="almt_mhs">Alamat :</label>
                                                <div class="col-sm-8">
                                                    <textarea id="smk_almt" name="alamat" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                                                <div class="col-sm-8">
                                                    <input type="email" class="form-control" name="email" id="email_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                                                <div class="col-sm-8">
                                                    <input type="number" class="form-control" name="no_hp" id="notlp_mhs" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="nim_mhs">Tempat Lahir :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="tempat_lahir" class="form-control" id="nim_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="nim_mhs">Tanggal Lahir :</label>
                                                <div class="col-sm-8">
                                                    <input type="date" class="form-control" name="tgl_lahir" id="nim_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                                <div class="col-sm-8"><select id="agama_mhs" name="jabatan" required class="form-control select2">
                                                <option value="" disabled selected="selected">Pilih Jabatan</option>
                                                <?php foreach ($tinggi as $j) : ?>
                                                    <option value="<?= $j['id_jabatan'] ?>"><?= $j['nama_jabatan'] ?></option>
                                                <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4">Level :</label>
                                                <div class="col-sm-8"><select id="agama_mhs" name="level" required class="form-control select2">
                                                <option value="" disabled selected="selected">Pilih Level</option>
                                                <?php foreach ($easy as $e) : ?>
                                                    <option value="<?= $e['id_level'] ?>"><?= $e['nama_level'] ?></option>
                                                <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                            <div class="modal-footer ">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data">
                                                <!-- <a href="reset" class="btn btn-warning">Reset</a> -->
                                                <a  class="btn btn-danger" data-dismiss="modal">Batal</a>
                                            </div>  
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
                        <form action="/admin/Pegawai/<?= $q['id_pegawai']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger alert_notif">Delete</button>
                        </form>     
                    </div>
                </div>
            </div><!-- /.end modal-dialog -->
        </div><!-- /.end modal fate -->

        


    </div> <!-- End of Main Content -->
</div> <!-- End of Content Wrapper -->

<?= $this->endSection(); ?>