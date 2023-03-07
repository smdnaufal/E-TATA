<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>
<!-- modal delete -->
<div class="example-modal">
      <div id="deleteuser<?php echo $no; ?>" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-title">Konfirmasi Delate</h3>
            </div>
            <div class="modal-body">
              <h4 align="center" >Apakah anda yakin ingin menghapus user id <?php echo $row['id_user'];?><strong><span class="grt"></span></strong> ?</h4>
            </div>
            <div class="modal-footer">
              <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancle</button>
              <a href="../user/function_user.php?act=deleteuser&id=<?php echo $row['id_user']; ?>" class="btn btn-primary">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- modal delete -->

<?= $this->endSection(); ?>