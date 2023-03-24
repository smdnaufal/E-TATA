<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Ubah Data</h2>
            <form action="/admin/PegawaiController/update/<?= $pegawai['id_pegawai']; ?>" method="post">
                <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">
                <input type="hidden" name="id_detail" value="<?= $pegawai['id_detail_pegawai']; ?>">
                <input type="hidden" name="password" value="<?= $pegawai['password']; ?>">
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
                                    <label class="control-label col-sm-4" for="jabatan">Nama Lengkap :</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="jabatan" name="nama_lengkap" value="<?= (old('nama_lengkap')) ? old('nama_lengkap') : $pegawai['nama_lengkap']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="ktp_mhs">Nip :</label>
                                    <div class="col-sm-12">
                                        <input type="number" name="nip" class="form-control" id="ktp_mhs" name="nip" value="<?= (old('nip')) ? old('nip') : $pegawai['nip']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="jk_mhs">Jenis Kelamin :</label>
                                    <div class="col-sm-12"><select id="jk_mhs" name="gender" class="form-control select2" style="width: 100%;">
                                            <option value="" disabled selected="selected" value="<?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $pegawai['jenis_kelamin']; ?>"><?= (old('jenis_kelamin')) ? old('jenis_kelamin') : $pegawai['jenis_kelamin']; ?></option>
                                            <option value="" disabled>Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="almt_mhs">Alamat :</label>
                                    <div class="col-sm-12">
                                        <textarea id="smk_almt" name="alamat" class="form-control"><?= (old('alamat')) ? old('alamat') : $pegawai['alamat']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="email_mhs">Email :</label>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" name="email" id="email_mhs" value="<?= (old('email')) ? old('email') : $pegawai['email']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="notlp_mhs">No. Telepon :</label>
                                    <div class="col-sm-12">
                                        <input type="number" class="form-control" name="no_hp" id="notlp_mhs" value="<?= (old('no_hp')) ? old('no_hp') : $pegawai['no_hp']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="nim_mhs">Tempat Lahir :</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="tempat_lahir" class="form-control" id="nim_mhs" value="<?= (old('tempat_lahir')) ? old('tempat_lahir') : $pegawai['tempat_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="nim_mhs">Tanggal Lahir :</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" name="tgl_lahir" id="nim_mhs" value="<?= (old('tgl_lahir')) ? old('tgl_lahir') : $pegawai['tgl_lahir']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="jabatan">Jabatan :</label>
                                    <div class="col-sm-12"><select id="agama_mhs" name="jabatan" class="form-control select2">
                                            <option value="" selected="selected" value="<?= (old('id_jabatan')) ? old('id_jabatan') : $pegawai['id_jabatan']; ?>"><?= (old('nama_jabatan')) ? old('nama_jabatan') : $pegawai['nama_jabatan']; ?></option>
                                            <option value="" disabled>Pilih Jabatan</option>
                                            <?php foreach ($tinggi as $j) : ?>
                                                <option value="<?= $j['id_jabatan'] ?>"><?= $j['nama_jabatan'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4">Level :</label>
                                    <div class="col-sm-12"><select id="agama_mhs" name="level" class="form-control select2">
                                            <option value="" selected="selected" value="<?= (old('id_level')) ? old('id_level') : $pegawai['id_level']; ?>"><?= (old('nama_level')) ? old('nama_level') : $pegawai['nama_level']; ?></option>
                                            <option value="" disabled>Pilih Level</option>
                                            <?php foreach ($easy as $e) : ?>
                                                <option value="<?= $e['id_level'] ?>"><?= $e['nama_level'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                            </div> <!-- /.end row -->

                        </div> <!-- /.end panel -->
                        <div class="modal-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="Edit Data">

                            <a href="/admin/Pegawai" data-dismiss="modal" class="btn btn-danger">Batal</a>
                        </div><!-- /.box-footer -->
                    </div> <!-- /.end content -->
            </form><!-- /.end form -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>