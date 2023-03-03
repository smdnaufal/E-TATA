<style>
    .btn:hover {
        background-color: azure;
        color: black;
    }

    .nav-link:hover {
        color: #18DF14;
    }
</style>
<nav class="navbar fixed-top navbar-expand-lg bg-light shadow">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="/img/bspji.png" alt="" width="30" height="34" class="d-inline-block align-text-top">
            <!-- <span style="margin-left: 46px;"></span> -->
        </a>
        <span style="margin-top: 5px; color: #18DF14;"> <b>E-Tata Dinas</b> <br> BSPJI SAMARINDA</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">Berand</a>
                <a class="nav-link" href="<?= base_url('/pages/about'); ?>">Tentang</a>
                <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Kontak</a>
                <a class="nav-link" href="<?= base_url('#'); ?>">Dokumentasi</a>
                <a href="asset" class="btn btn-success">Login</a>
            </div>
        </div>
    </div>

    </div>
</nav>