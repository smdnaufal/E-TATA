<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                    <!-- Content Row -->

                    <div class="row">
                       
                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                                        <div class="dropdown no-arrow">
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                    
                                        <table class="table table-bordered  ">
                                            <thead class="text-center">
                                                <tr >
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal Pengajuan</th>
                                                <th scope="col">Deskripsi Surat</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <p>Nama :</p>
                                                    <p>Nip :</p>
                                                    <p>Tujuan :</p>
                                                    <p>Sifat Surat :</p>
                                                    <p>Penanda Tangan :</p>
                                                </td>
                                                <td class="text-center">
                                                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-data"><i class="fa-solid fa-eye"></i>    Preview</a>

                                                <a type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-square-check"></i>   Proses</a>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- /.card body -->
                                </div><!-- /col -->

                     </div><!-- /.content row -->
                    </div><!-- /.content row -->
                </div> <!-- /.container-fluid -->
               

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        <?= $this->endSection(); ?>