<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <title>Inventory Store</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="" type="image/x-icon">
  </head>

  <body>
     <!-- Awal Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#4ac7accb;">
        <div class="container">
            <a class="navbar-brand " href="index.php">
                <!-- <img src="" alt="" width="50" height="50" class="me-2"> -->
                <div class="text-black">
                    <strong>Inventory</strong> Store                    
                </div>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link text-black fw-bolder " href="beranda.php">Beranda</a>
              <a class="nav-link text-black" href="#">Tentang</a>
              <div class="nav-item dropdown">
                <a class="nav-link  text-black dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Masuk
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="admin_login.php">Admin</a></li>
                  <li><a class="dropdown-item" href="petugas_login.php">Petugas</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </nav>
    <!--Akhir Navbar-->

    <!--Awal Corousel--> 
    <div class="container-fluid " style="background-color: #e8e8e8;">
      <div class="row">
        <div class="col-6 mt-4">
          <div class="container">
            <h2 class="text-center">Tentang Inventory Store</h2>
            <p>
              Website ini dibuat untuk memenuhi tugas UTS dan project UAS kami.
              Website ini Tentang mendata barang atau inventory pada suatu toko, 
              contoh barang yang keluar, di pinjam dan lain sebagainya
            </p>
          </div>
        </div>
            <div class="col-6">
              <div id="carouselExampleIndicators" class="carousel slide mt-4 mb-5" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="../Gambar/Corousel/logistic1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../Gambar/Corousel/logistic2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="../Gambar/Corousel/logistic3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
              </div>
            </div>
      </div>
    </div> 
    <!--Akhir Corousel-->

    <!--Login Interface-->
    <div class="container-fluid">
      <div class="container">
        <div class="text-center py-2">
          <h2>Masuk Sebagai.....</h2>
          <a href="admin_login.php">
            <button class="active btn btn-warning">
              Admin
            </button>
          </a>
        </div>
        <div class="text-center py-3">
          <a href="petugas_login.php">
            <button class="active btn btn-primary">
            Petugas
            </button>
          </a>
        </div>
      </div>
    </div>
    <!--Awal Login Interface-->


    <!--Tentang Website-->
    <div class="container-fluid py-4" style="background-color: #e8e8e8;">
      <div class="container">
        <div>
          <h2 class="text-center">Tentang Website Inventory</h2>
          <p>Website inventory adalah aplikasi berbasis Web untuk mengatur dan mencatat keluar masuk barang 
            di masing-masing gudang dalam satu perusahaan, yang meliputi pencatatan barang masuk dari Supplier dan pencatatan barang keluar.</p>
        </div>
      </div>

    </div>
    <!--Tentang Website-->        
        
    <!-- Footer -->
    <footer class="shadow-sm bg-body-tertiary p-4 mt-5">
      <div class="container-fluid"> 
        <div class="row mt-2">
          <div class="col-md-6 text-md-start text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="#" style="width: 40px;">
            </a>
            <span class="ps-1"><i class="fa-regular fa-copyright"></i> @2023 | Create by <a href="https://instagram.com/chairulhuda._?igshid=OGQ5ZDc2ODk2ZA==" class="text-decoration-none text-dark fw-bold">Inventory Store</a></span>
          </div>

          <div class="col-md-6 text-md-end text-center pt-2 pb-2">
            <a href="#" class="text-decoration-none">
              <img src="../Gambar/socialmedia/facebook.png" class="ms-2" style="width: 30px;">
            </a>
            <a href="#" class="text-decoration-none">
              <img src="../Gambar/socialmedia/instagram.png" class="ms-2" style="width: 30px;">
            </a>
            <a href="#" class="text-decoration-none">
              <img src="../Gambar/socialmedia/whatsapp.png" class="ms-2" style="width: 30px;">
            </a>
            <a href="#" class="text-decoration-none">
              <img src="../Gambar/socialmedia/twitter.png" class="ms-2" style="width: 30px;">
            </a>
          </div>

        </div>
      </div>
    </footer>
    <!-- Akhir Fooer -->
        
  </body>