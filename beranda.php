<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
<!--- Awal Navbar--->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark py-1 fixed-top">
  <div class="container">
    <a class="navbar-brand" href="beranda.php">FUNS <b>store</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#cari-barang">Cari Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#produk">Produk Kita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#kontak">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--- Akhir Navbar--->
<!--- awal showcase--->
    <section id="beranda" class="bg-primary text-white p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>
                        Hai Sobat <b>FUNS store</b>
                    </h1>
                    <p class="lead my-4">
                        Lengkapi perlengkapan mendaki Anda dengan berbagai produk yang kami sediakan agar lebih siap dalam menghadapi keadaan di alam bebas. 
                    </p>
                    <a class="btn btn-light btn-lg" href="tentang-saya.html">
                        Tentang Kami
                    </a>
                </div>
                <img src="gambar/toko-vector.png" class="img-fluid w-50 d-none d-sm-block">
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide mt-5 mb-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="gambar/1.png" class=" d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="gambar/2.png" class=" d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="gambar/3.png" class=" d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
<!--- akhir showcase--->
<!--- awal Kolom Pencarian --->
<section id="cari-barang" class="bg-dark text-light p-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <h3>Cari barang yang kamu Inginkan!</h3>
            </div>
            <div class="col-md-7">
                <form class="d-flex ms-auto my-4 my-lg-0" method="GET" action="beranda.php" role="search">
                    <input type="text" name="kata_cari" value="<?php if (isset($_SET['kata_cari'])) {echo $_GET['kata_cari'];} ?>" class="form-control" placeholder="Cari Barang Anda" type="search" aria-label="Search">
                    <button class="btn btn-primary" type="submit"><img src="icon/search.png" alt="Search" width="20" height="20"></button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--- akhir Kolom Pencarian --->
<!--- awal Tampilan produk--->
<div class="row mx-0">
                <?php
                include ('koneksi.php');
                if (isset($_GET['kata_cari']))
                {
                    $kata_cari = $_GET['kata_cari'];
                    $query = "SELECT * FROM produk WHERE harga like '%".$kata_cari."%' OR kode_barang like '%".$kata_cari."%' OR nama_barang like '%".$kata_cari."%' ";
                }
                else
                {
                    $query = "SELECT * FROM produk";
                }
                $result = mysqli_query($koneksi, $query);
                if(!$result)
                    {
                        die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }
                while ($row = mysqli_fetch_assoc($result))
                    {
                ?>
    <section id="produk"class="p-3 mb-4 mt-4 col-lg-3 col-sm-12">
        <div class="container-fluid">
            <div class="row align-items-start">
                    <div class="card text-center px-0">
                        <div class="card-header bg-info display-4 pt-4">
                            <img src="./gambar/<?= $row['lokasi']; ?>.png" width="80%">
                            <h5 class="card-text mb-4 text-dark"><?= $row['kode_barang']; ?></h5>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title mb-3 text-dark"><?= $row['nama_barang']; ?></h3>
                            <h4 class="card-title mb-3 text-dark"><?= $row['harga']; ?></h4>
                            <a href="<?= $row['lokasi']; ?>.html" class="btn btn-warning">Detail</a>
                        </div>
                    </div>
            <div>
        </div>
    </section>
<?php 
    } 
?>
</div>
<!--- akhir Tampilan produk--->
<!--- awal Kontak--->
<section id="kontak" class="p-5 bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md text-center">
                <img src="gambar/logo-funs.png" width="100">
                <h2 class="text-center mb-4 mt-3">Informasi Kontak</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group item">
                        <span class="fw-bold"><img src="icon/map.png" alt="Location" width="40" height="40"></span>Jl. Cucut 139 RT/RW 002/001 Kel. Bendomungal Kec. Bangil Kab. Pasuruan 67153
                    </li>
                    <li class="list-group item mt-3">
                        <span class="fw-bold"><img src="icon/phone.png" alt="Contact" width="40" height="40"></span>08970660008
                    </li>
                </ul>
                <a class="btn btn-light btn-lg mt-4" href="kontak-saya.html">Hubungi Kami!</a>
            </div>
        </div>
    </div>
</section>
<!--- akhir Kontak--->
<!--- awal footer--->
<footer class="p-3 bg-primary text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright&copy;2022. Made with &hearts; by Muhammad Nafi' Firmansyah
        </p>
    </div>
</footer>
<!--- akhir footer--->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>