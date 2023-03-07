<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="jumbotron" id="beranda">

    <div class="container">
        <div class="row justify-content-center text-center mb-2">

            <div class="col-mb-3">

                <img src="/img/bspji.png" width="90" height="104" class="" alt="Maje Graphics" width="auto" />

                <h1 class="display-4 fw-bold" style="margin-top: 10px;">E-TATA DINAS</h1>

                <p class="lead">BSPJI SAMARINDA</p>

            </div>

        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card border-light mb-3 shadow" style="max-width: 18rem; margin-left:200px;">
                    <div class="card-header bg-transparent border-light" style="color: #18DF14;"> <b>Website Profil</b> </div>
                    <div class="card-body text-success">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-50 translate-middle"><img style="margin-top: 10px;" src="/img/bspji.png" alt="" width="30" height="34" class="d-inline-block align-text-top">
                            </div>
                        </div>
                        <p class="card-text text-center" style="margin-top: 25px;">Halaman website Balai Standardisasi dan Pelayanan Jasa Industri Samarinda secara detail seperti profil visi dan misi, informasi publik, dan lain-lain.</p>
                    </div>
                    <div class="card-footer bg-transparent border-light"><a class="text-decoration-none" style="color:#18DF14;" href="https://baristandsamarinda.kemenperin.go.id/">Selengkapnya...</a></div>
                </div>
            </div>
            <div class="col">
                <div class="card border-light mb-3 shadow" style="max-width: 18rem; margin-left:50px;">
                    <div class="card-header bg-transparent border-light" style="color: #18DF14;"> <b>HELPDESK</b> </div>
                    <div class="card-body text-success">
                        <div class="position-relative">
                            <div class="position-absolute top-0 start-50 translate-middle"><img style="margin-top: 10px;" src="/img/whatsapp-logo-png-hd-2.png" alt="" width="30" height="34" class="d-inline-block align-text-top">
                            </div>
                        </div>
                        <p class="card-text text-center" style="margin-top: 25px;">Layanan berbasis WA untuk memudahkan user berkonsultasi dengan operator kami.</p><br>
                    </div>
                    <div class="card-footer bg-transparent border-light"><a class="text-decoration-none" style="color:#18DF14;" href="https://wa.me/08125533977">Selengkapnya...</a></div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,192L60,197.3C120,203,240,213,360,192C480,171,600,117,720,112C840,107,960,149,1080,170.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>

</section>

<section id="about">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Tentang</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam reprehenderit doloribus aspernatur assumenda amet dicta aperiam molestias veritatis. Accusamus vel nesciunt id quos exercitationem. Autem.</p>
            </div>
            <div class="col">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus, eveniet quo fugit odio enim veritatis, corrupti amet perferendis eius maiores aut. Corrupti, exercitationem pariatur tempora quis deleniti veniam numquam vitae.</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F0FFFF" fill-opacity="1" d="M0,192L60,197.3C120,203,240,213,360,192C480,171,600,117,720,112C840,107,960,149,1080,170.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</section>

<section id="kontak">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>Kontak</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#6c757d" fill-opacity="1" d="M0,192L60,197.3C120,203,240,213,360,192C480,171,600,117,720,112C840,107,960,149,1080,170.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
</section>

<footer class="bg-secondary text-white text-center pb-3">
    <p>Created by <i class="bi bi-house-heart"></i> STMIK WICIDA Team 2023</p>
    <a href="https://www.instagram.com/stmik.wicida/?hl=en"><i class="bi bi-instagram"></i> Instagram (stmik.wicida)</a>
</footer>

<?= $this->endSection(); ?>