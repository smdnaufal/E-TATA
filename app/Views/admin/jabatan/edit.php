<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Ubah Data</h2>
            <form action="/admin/JabatanController/update/<?= $jabatan['id_jabatan']; ?>" method="post">
                <input type="hidden" name="id_jabatan" value="<?= $jabatan['id_jabatan']; ?>">
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
                                    <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" autofocus id="jabatan" required name="nama_jabatan" value="<?= (old('nama_jabatan')) ? old('nama_jabatan') : $jabatan['nama_jabatan']; ?>">
                                    </div>
                                </div>

                            </div> <!-- /.end row -->

                        </div> <!-- /.end panel -->
                        <div class="modal-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">

                            <a href="/admin/jabatan" data-dismiss="modal" class="btn btn-danger">Batal</a>
                        </div><!-- /.box-footer -->
                    </div> <!-- /.end content -->
            </form><!-- /.end form -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>