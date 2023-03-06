<?= $this->extend('layout/template_admin'); ?>

<?= $this->section('content'); ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav text-bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
        <div class="row justify-content-center text-center">

            <div class="col-mb-3">

                <img src="/img/bspji.png" width="30" height="34"  alt="Maje Graphics" width="auto" />

            </div>

            </div>  
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                
                </div>
                <div class="sidebar-brand-text " >E-TATA DINAS<br>BSPJI SAMARINDA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="/admin">
                <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard Admin</span></a>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="/admin/Pegawai">
                    <i class="fa-solid fa-users"></i>
                    <span>Daftar Pegawai</span>
                    
                </a>
                
            </li>
            

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-sharp fa-solid fa-envelopes-bulk"></i>
                    <span>Surat</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html">Arsip</a>
                        <a class="collapse-item" href="utilities-border.html">Jenis Surat</a>
                        <a class="collapse-item" href="utilities-animation.html">Tujuan Surat</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-receipt"></i>
                    <span>Invoice</span>
                </a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fa-solid fa-flag"></i>
                    <span>Laporan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Log Out</span></a>
            </li>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <form class="form-inline">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
        </form>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Andreas Johan</span>
                                <i class="fa-solid fa-circle-user fa-2x"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Daftar Pegawai</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <button type="button" class="btn btn-primary btn-sm mb-2" ><i class="fa-solid fa-user-plus me-2" ></i>Tambah Data</button>
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nip</th>
                                <th>Nama Lengakap</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><a href="/admin/Pegawai/Edit"  class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square "></i></a>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>198609262015051</td>
                                <td>Andreas johan</td>
                                <td>cobaaja@gmail.com</td>
                                <td>082353373130</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

    </div>
        <?= $this->endSection(); ?>