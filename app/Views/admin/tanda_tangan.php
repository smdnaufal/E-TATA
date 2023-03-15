<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <!-- Content Row -->

        <div class="row ">

            <!-- Area Chart -->
            <div class="">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-0 font-weight-bold text-primary">Data Penanda Tangan</h5>
                        <div class="dropdown no-arrow">
                        </div>
                    </div>
                <div class="table-responsive">
                     <!-- Card Body -->
                     <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <button type="button" class="btn btn-primary btn-sm mb-2" data-toggle="modal" data-target="#tambah-data">
                                        <i class="fa-solid fa-user-plus me-2"></i>Tambah Data</button>
                                </div>
                                <div class="col">
                                    <form class="d-flex" role="search">
                                        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-primary" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <table class="table table-bordered mt-3">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Dr Sidik Herman S.Sn., M.M</td>
                                        <td>Kepala BSPJI</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-data"><i class="fa-solid fa-pen-to-square "></i></a>
                                            <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-data"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Emy Fibrianti, S.E, M.M</td>
                                        <td>Kepala Sub Bagian Tata Usaha</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-data"><i class="fa-solid fa-pen-to-square "></i></a>
                                            <a type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-data"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="modal fade" id="tambah-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form>
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Pilih Penanda Tangan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-4" for="jabatan">Penanda Tangan :</label>
                                                <div class="col-sm-8"><select id="jabatan" class="form-control select2">
                                                        <option value="-" selected="selected">---</option>
                                                        <option value="kepala bspji">Kepala BSPJI</option>
                                                        <option value="kepala bub bagian tata usaha">Kepala Sub Bagian Tata Usaha</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">
                                                <a href="reset" class="btn btn-warning">Reset</a>
                                                <a data-dismiss="modal" class="btn btn-danger">Batal</a>
                                            </div><!-- /.box-footer -->

                                        </div> <!-- /.end row -->

                                </div> <!-- /.end panel -->

                            </div> <!-- /.end content -->
                            </form><!-- /.end form -->
                        </div>
                    </div> <!-- /.end modal-dialog -->
                </div> <!-- /.end modal fate -->


                <div class="modal fade" id="edit-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Penanda Tangan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="panel-body">
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label col-sm-8" for="nama penanda tangan">Nama Penanda Tangan :</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="nama_penanda_tangan" required>
                                                </div>
                                            </div>

                                        </div> <!-- /.end row -->
                                    </div> <!-- /.end panel -->
                                    <div class="modal-footer">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">
                                        <a href="reset" class="btn btn-warning">Reset</a>
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
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div><!-- /.end modal-dialog -->
            </div><!-- /.end modal fate -->

        </div><!-- /.card body -->

                </div>
    </div><!-- /col -->

</div><!-- /.content row -->
</div><!-- /.content row -->
</div> <!-- /.container-fluid -->
<?= $this->endSection(); ?>