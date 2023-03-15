<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
<div class="flash-salah" data-flashdata="<?= session()->getFlashdata('salah'); ?>"></div>
<div class="flash-hapus" data-flashdata="<?= session()->getFlashdata('hapus'); ?>"></div>
<div class="flash-ubah" data-flashdata="<?= session()->getFlashdata('ubah'); ?>"></div>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Content Row -->

        <div class="row justify-content-center">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Daftar Jabatan</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#tambah-data"><i class="fa-solid fa-user-plus me-2"></i>Tambah Data</button>
                                </div>
                                <div class="col">
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>


                            <table class="table table-bordered mt-3">

                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($jabatan as $j) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $j['nama_jabatan']; ?></td>
                                            <td class="text-center">
                                                <a href="/admin/jabatan/Edit/<?= $j['id_jabatan']; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square "></i></a>

                                                <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-data"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                            <div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">

                                    <form action="/admin/JabatanController/save" method="post">
                                        <?= csrf_field(); ?>

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" autofocus id="jabatan" required name="nama_jabatan">
                                                            </div>
                                                        </div>

                                                    </div> <!-- /.end row -->

                                                </div> <!-- /.end panel -->
                                                <div class="modal-footer">
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Tambah Data">

                                                    <a data-dismiss="modal" class="btn btn-danger">Batal</a>
                                                </div><!-- /.box-footer -->
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
                                        Apakah anda yakin akan menghapus <span id="delete-nama"></span>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <form action="/admin/jabatan/<?= $j['id_jabatan']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger alert_notif">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.end modal-dialog -->
                        </div><!-- /.end modal fate -->

                    </div><!-- /.card body -->
                </div><!-- /col -->

            </div><!-- /.content row -->
        </div><!-- /.content row -->
    </div> <!-- /.container-fluid -->


    <?= $this->endSection(); ?>