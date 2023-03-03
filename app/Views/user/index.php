<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="jumbotron">

    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-mb-3">

                <img src="/img/bspji.png" width="90" height="104" style="margin-top: 80px;" alt="Maje Graphics" width="auto" />

                <h1 class="display-4 fw-bold" style="margin-top: 10px;">E-TATA DINAS</h1>

                <p class="lead">BSPJI SAMARINDA</p>

            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4" style="margin-top: 10px;">
            <div class="col">
                <div class="card border-light mb-3 shadow" style="max-width: 18rem; margin-left:200px;">
                    <div class="card-header bg-transparent border-light" style="color: #18DF14;"> <b>Website Profil</b> </div>
                    <div class="card-body text-success">
                        <img src="/img/bspji.png" alt="" width="30" height="34" class="d-inline-block align-text-top">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent border-light">Footer</div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light mb-3 shadow" style="max-width: 18rem; margin-left:50px;">
                    <div class="card-header bg-transparent border-light" style="color: #18DF14;"> <b>Website Profil</b> </div>
                    <div class="card-body text-success">
                        <img src="/img/bspji.png" alt="" width="30" height="34" class="d-inline-block align-text-top">
                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent border-light">Footer</div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#BAFFC0" fill-opacity="1" d="M0,256L48,250.7C96,245,192,235,288,224C384,213,480,203,576,208C672,213,768,235,864,213.3C960,192,1056,128,1152,106.7C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

</section>

<?= $this->endSection(); ?>