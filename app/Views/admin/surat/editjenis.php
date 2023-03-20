<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Ubah Data</h2>
            <form action="/admin/JenisController/update/<?= $jenis['id_jenis']; ?>" method="post">
                <input type="hidden" name="id_jenis" value="<?= $jenis['id_jenis']; ?>">
                <?= csrf_field(); ?>

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="panel-body">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="jabatan">Sifat Surat :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" autofocus id="jabatan" required name="nama_jenis" value="<?= (old('nama_jenis')) ? old('nama_jenis') : $jenis['nama_jenis']; ?>">
                                    </div>
                                </div>

                            </div> <!-- /.end row -->

                        </div> <!-- /.end panel -->
                        <div class="modal-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">

                            <a href="/admin/jenis" data-dismiss="modal" class="btn btn-danger">Batal</a>
                        </div><!-- /.box-footer -->
                    </div> <!-- /.end content -->
            </form><!-- /.end form -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>