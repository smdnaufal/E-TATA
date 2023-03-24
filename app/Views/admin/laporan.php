<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Daftar Pegawai</h5>
        </div>
        <div class="card-body">
            <div class="table-a">
               
                <table class="table table-bordered  ">
                                            <thead class="text-center">
                                                <tr >
                                                <th scope="col">No</th>
                                                <th scope="col">No Surat</th>
                                                <th scope="col">Deskripsi Surat</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td class="text-center">1</td>
                                                <td>12.010/DP-KM/IX/2019</td>
                                                <td>
                                                    <p>Nama :</p>
                                                    <p>Nip :</p>
                                                    <p>Tujuan :</p>
                                                    <p>Sifat Surat :</p>
                                                    <p>Penanda Tangan :</p>
                                                </td>
                                                <td class="text-center">
                                                <a href="" class="btn btn-success btn-sm" data-toggle="modal" data-target="#edit-data"><i class="fa-solid fa-check-to-slot"></i></a>
                                                </td>
                                                <td class="text-center">
                                                <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-data"><i class="fa-solid fa-eye"></i>    Preview</a>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>

            
    </div> <!-- End of Main Content -->
</div> <!-- End of Content Wrapper -->

<?= $this->endSection(); ?>