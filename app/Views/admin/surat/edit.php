<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Ubah Data</h2>
            <form action="/admin/ArsipController/update/<?= $arsip['id_arsip']; ?>" method="post">
                <input type="hidden" name="id_arsip" value="<?= $arsip['id_arsip']; ?>">
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
                                    <label class="control-label col-sm-4" for="jabatan">Kode Arsip :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" autofocus id="arsip" required name="kode_arsip" value="<?= (old('kode_arsip')) ? old('kode_arsip') : $arsip['kode_arsip']; ?>">
                                    </div>
                                </div>

                            </div> <!-- /.end row -->

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="jabatan">Kode Arsip :</label>
                                    <div class="col-md-12">
                                    <select class="form-select" name="no_arsip" aria-label="Default select example" required>
                                        <option selected value="<?= (old('no_arsip')) ? old('no_arsip') : $arsip['no_arsip']; ?>"><?= (old('no_arsip')) ? old('no_arsip') : $arsip['no_arsip']; ?></option>
                                        <option  disabled>Pilih Nomor Arsip</option>
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
                                    <label class="control-label col-sm-4" for="jabatan">Kode Arsip :</label>
                                    <div class="col-md-12">
                                        <textarea id="smk_almt" name="keterangan" class="form-control" required  value="<?= (old('keterangan')) ? old('keterangan') : $arsip['keterangan']; ?>"><?= (old('keterangan')) ? old('keterangan') : $arsip['keterangan']; ?></textarea>
                                    </div>
                                </div>

                            </div>

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