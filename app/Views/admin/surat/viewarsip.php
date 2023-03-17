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
            <h4 class="m-0 font-weight-bold text-primary">Arsip Surat</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#tambah-data"><i class="fa-solid fa-user-plus me-2"></i>Tambah Data</button>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Arsip</th>
                            <th>No Arsip</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                                    <?php foreach ($arsip as $j) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $j['kode_arsip']; ?></td>
                                            <td><?= $j['no_arsip']; ?></td>
                                            <td><?= $j['keterangan']; ?></td>
                                            <td class="text-center">
                                                <a href="/admin/surat/Edit/<?= $j['id_arsip']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square "></i></a>

                                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-data"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                    </tbody>
                </table>

                <div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl rotateInDownLeft animated ">
                        <form method="post" action="/admin/ArsipController/save">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Arsip</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="panel-body">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="ktp_mhs">Kode Arsip</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="kode_arsip" id="ktp_mhs" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="nim_mhs">Nomor Arsip:</label>
                                                <div class="col-sm-8">
                                                <select class="form-select" name="no_arsip" aria-label="Default select example" required>
                                                    <option selected disabled>Pilih Nomor Arsip</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                </select>
                                                </div>
                                            </div>
                                         
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                                <label class="control-label col-sm-4" for="almt_mhs">Keterangan :</label>
                                                <div class="col-sm-8">
                                                    <textarea id="smk_almt" name="keterangan" class="form-control" required></textarea>
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
                        Apakah anda yakin akan menghapus ?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="/admin/surat/<?= $j['id_arsip']; ?>" method="post" class="d-inline">
                         <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                         <button type="submit" class="btn btn-danger alert_notif">Delete</button>
                    </form>
                    </div>
                </div>
            </div><!-- /.end modal-dialog -->
        </div>/.end modal fate

        


    </div> <!-- End of Main Content -->
</div> <!-- End of Content Wrapper -->

<?= $this->endSection(); ?>