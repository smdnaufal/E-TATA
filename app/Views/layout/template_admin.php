<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="/asset/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->

    <link href="/asset/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="/asset/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/asset/css/nav.css" rel="stylesheet" />
    <title><?= $title; ?></title>
</head>

<body id="page-top">

    <?= $this->include('layout/sidebar_admin'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/jquery.js"></script>
    <script src="/asset/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/asset/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/asset/js/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/asset/js/chart-area-demo.js"></script>
    <script src="/asset/js/chart-pie-demo.js"></script>
    <script src="/asset/js/jquery.dataTables.min.js"></script>
    <script src="/asset/js/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/asset/js/datatables-demo.js"></script>

    <!-- view -->
    <script src="/asset/js/view.js"></script>
    <script src="/asset/js/sweetalert2.all.min.js"></script>
    <script src="/asset/js/main.js"></script>


    <script src="/asset/js/scripts.js"></script>

</body>

</html>