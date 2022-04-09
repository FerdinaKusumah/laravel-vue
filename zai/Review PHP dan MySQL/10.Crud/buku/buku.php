<?php
require 'function_buku.php';

// Ambil data dari tabel buku, pengarang, penerbit, katalog / Query LEFT JOIN data buku, pengarang, penerbit, katalog
$books = query("SELECT buku.*, nama_pengarang, nama_penerbit, katalog.nama as nama_katalog FROM buku
                JOIN pengarang ON pengarang.id_pengarang = buku.id_pengarang
                JOIN penerbit ON penerbit.id_penerbit = buku.id_penerbit
                JOIN katalog ON katalog.id_katalog = buku.id_katalog
                ORDER BY judul ASC");

?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Buku</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Perpustakaan</sup>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Buku</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../penerbit/penerbit.php">
                    <i class="fas fa-fw fa-industry"></i>
                    <span>Penerbit</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../pengarang/pengarang.php">
                    <i class="fas fa-fw fa-pencil-ruler"></i>
                    <span>Pengarang</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../katalog/katalog.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Katalog</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ZAI</span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Buku</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="tambah_buku.php" class="btn btn-sm btn-primary shadow-sm">
                                <i class="fas fa-plus fa-sm text-white">Tambah Data Buku</i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>ISBN</th>
                                            <th>Judul</th>
                                            <th>Tahun</th>
                                            <th>Penerbit</th>
                                            <th>Pengarang</th>
                                            <th>Katalog</th>
                                            <th>Stok</th>
                                            <th>Harga Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>ISBN</th>
                                            <th>Judul</th>
                                            <th>Tahun</th>
                                            <th>Penerbit</th>
                                            <th>Pengarang</th>
                                            <th>Katalog</th>
                                            <th>Stok</th>
                                            <th>Harga Pinjam</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php foreach ($books as $book) : ?>
                                        <tr>
                                            <td class="text-center"><?= $i;?></td>
                                            <td><?= $book["isbn"];?></td>
                                            <td><?= $book["judul"];?></td>
                                            <td><?= $book["tahun"];?></td>
                                            <td><?= $book["nama_penerbit"];?></td>
                                            <td><?= $book["nama_pengarang"];?></td>
                                            <td><?= $book["nama_katalog"];?></td>
                                            <td><?= $book["qty_stok"];?></td>
                                            <td><?= $book["harga_pinjam"];?></td>
                                            <td>
                                                <div class="d-grid gap-2 d-flex justify-content-between">
                                                    <a class="btn btn-info mr-1"
                                                        href="ubah_buku.php?isbn=<?= $book["isbn"];?>"><i
                                                            class="fa fa-pencil-alt"></i></a>
                                                    <a class="btn btn-danger"
                                                        href="hapus_buku.php?isbn=<?= $book["isbn"];?>"
                                                        onclick="return confirm('Beneran Pengen Dihapus?');"><i
                                                            class="fa fa-trash"></i></a>
                                            </td>
                            </div>
                            </tr>
                            <?php $i++;?>
                            <?php endforeach ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; ZN Website 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>