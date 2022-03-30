<?php
include_once "koneksi.php";
if(!isset($_SESSION['email'])) {
    echo "<script> alert('sesi anda telah habis silahkan login kembali');</script>";
    echo "<script> location = 'login1.php'; </script>";
  }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dilukisin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <!-- header-->
    <header>
        <img src="images/header2.jpg" alt="header" width="950px" height="120px">
        <h1 class="judul">D I L U K I S I N</h1>
        <p class="deskripsi">Kreasikan barang tercintamu disini</p>
    </header>
    <!-- akhir header-->

    <div class="wrap">
        <!-- menu -->
        <nav class="menu">
            <ul>
                <li class="active">
                    <a href="index.php"> Home </a>
                </li>
                <li>
                    <a href="form-pesanan.php">Pesan</a>
                </li>
                <li>
                    <a href="pembayaran.php">Bayar</a>
                </li>
                <li>
                    <a href="contact.php">contact us</a>
                </li>
                <li>
                    <a href="logout.php">Log out</a>
                </li>
            </ul>
        </nav>
        <!-- akhir menu -->

        <!-- sidebar -->
        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="images/sidebar1.jpg" alt="pict" width="100%">
                </div>

                <h2>Pemandangan</h2>
                <p>pegunungan yang indah dengan tanaman bunga yang tumbuh disekitarnya</p>
                <a href="form-pesanan.php">Pesan Lukisan</a>

            </div>
            <div class="widget">
                <div>
                    <img class="widget-pict" src="images/sidebar2.jpg" alt="pict" width="100%">
                </div>

                <h2>Hewan</h2>
                <p>lukisan ikan yang terlihat sangat cantik</p>
                <a href="form-pesanan.php">Pesan Lukisan</a>

            </div>

        </aside>
        <!-- akhir sidebar -->

        <!-- konten -->
        <div class="blog">
            <div class="conteudo">
                <div class="post-info">
                    Updated, <b>27 November 2021</b>
                </div>
                <img src="images/konten1.jpg">
                <h1>Lukisan Kucing</h1>
                <hr>
                <p>
                    Lukisan ini terinspirasi dari kucing dihalaman yang terlihat sangat cantik dengan bulunya yang khas
                </p>
                <a href="#" class="continue-lendo">In full -></a>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Updated, <b>26 November 2021</b>
                </div>
                <img src="images/konten2.jpg">
                <h1>Lukisan Bunga</h1>
                <hr>
                <p>
                    Bunga yang berwarna kuning ini terlihat sangat cantik
                </p>
                <a href="#" class="continue-lendo">In full -></a>
            </div>
        </div>
        <!-- akhir konten -->
    </div>
</body>
</html>