<?= $this->extend('layout/login_user'); ?>

<?= $this->section('content'); ?>
<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <form>
                <div class="h2 text-center">Sing in</div>

                  <div class="form-outline mb-6">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="NIP" />
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>
                  <div class="text-center pt-1 mb-5 pb-1">
                  <button class="btn btn-block text-center my-3">Log in</button>
                    
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
              <div class="text-center">
              <h4 class="mb-4 text-center">WELCOME</h4>
              <img src="/img/bspji.png" width="150" height="160"   alt="Maje Graphics" width="auto" />
              <h4 class="mb-4 text-center">BSPJI SAMARINDA</h4>
                </div>
                
                <p class="small text-center">5</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <?= $this->endSection(); ?>