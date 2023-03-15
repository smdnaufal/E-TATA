<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

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
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h5 class="m-0 font-weight-bold text-primary">Profil Admin</h5>
                                    </div>
                                    <!-- Card Body -->
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-2 pt-4">
                                            <img src="/img/bspji.png" alt="" width="100" height="120" style="border-radius: 100px; -moz-border-radius: 100px;">
                                        <a href="" class="ms-3  fw-bold">Ubah Foto</a>
                                        </div>
                                        <div class="col">
                                            <div class="card-body">
                                                <div class="row gy-5">
                                                    <div class="col-7">
                                                        <div class="p-3 fw-bold">Nama Lengkap</div>
                                                    </div>
                                                     <div class="col">
                                                         <div class="p-3">Andreas Johan</div>
                                                     </div>
                                                </div>
                                                <div class="row gy-5">
                                                    <div class="col-7">
                                                        <div class="p-3 fw-bold">Nip</div>
                                                    </div>
                                                     <div class="col">
                                                         <div class="p-3">198609262015051</div>
                                                     </div>
                                                </div>
                                                <div class="row gy-5">
                                                    <div class="col-7">
                                                        <div class="p-3 fw-bold">Alamat</div>
                                                    </div>
                                                     <div class="col">
                                                         <div class="p-3">Jl.kh.Wahid Hasyim 2 Gg.Wahyu Dalam</div>
                                                     </div>
                                                </div>
                                                <div class="row gy-5">
                                                    <div class="col-7">
                                                        <div class="p-3 fw-bold">No Hp</div>
                                                    </div>
                                                     <div class="col">
                                                         <div class="p-3">082353373130</div>
                                                     </div>
                                                </div>
                                                <div class="row gy-5">
                                                    <div class="col-7">
                                                        <div class="p-3 fw-bold">Email</div>
                                                    </div>
                                                     <div class="col">
                                                         <div class="p-3">2043023@wicida.ac.id</div>
                                                     </div>
                                                </div>
                                                <div class="row gy-5">
                                                    <div class="col-7">
                                                        <div class="p-3 fw-bold">Tempat, Tanggal Lahir</div>
                                                    </div>
                                                     <div class="col">
                                                         <div class="p-3">Manggarai, 02 Februari 2002</div>
                                                     </div>
                                                </div>   
                                    </div><!-- Row -->
                                </div><!-- end Card containner -->
                                    <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-data" data-nip="198609262015051" data-nama="Andraes Johan" data-email="cobaaja@gmail.com" data-no="082353373130">
                                    <i class="fa-solid fa-pen-to-square "></i>    Edit Data</a>
                            </div><!-- end Card Body -->
                                                 
                <div class="modal fade" id="edit-data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl rotateInDownLeft animated ">
                    <form>
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Profil Admin</h5>
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
                                            <label class="control-label col-sm-4" for="almt_mhs">Alamat :</label>
                                            <div class="col-sm-8">
                                                <textarea id="smk_almt" name="almt_mhs" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="notlp_mhs" required>
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
                                            <label class="control-label col-sm-4" for="email_mhs">Tempat Lahir:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="email_mhs" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email_mhs">Tanggal Lahir:</label>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control" id="email_mhs" required>
                                            </div>
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