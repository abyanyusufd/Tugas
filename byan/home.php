<?php 
  session_start();
  include "koneksi.php";
 
   if(!isset($_SESSION['username'])){
    header("Location: register.php");
   }
  $query = "SELECT * FROM barang";
  $sql = mysqli_query($koneksi, $query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>byan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body>
    <nav>
      <h3>Eo.clothes</h3>
      <div id="menu-icon" class="menu-icon">
        <i class="ph-fill ph-list"></i>
      </div>
      <ul id="menu-list" class="hidden">
        <li>
          <h5><a href="home.php">Home</a></h5>
        </li>
        <li>
          <h5><a href="pesanan.php">pesanan</a></h5>
        </li>
        <li>
        <a class="nav-link" href="logout.php">
            <h5><i class="fa fa-user" aria-hidden="true"></i> logout
        </a></h5>
        </li>
        <li>
         <h5><a href="home.php">about us</a></h5>
        </li>
        <li>
          <h5><a href="admin.php">Contact</a></h5>
        </li>
      </ul>
    </nav>

    <script src="/navbar.js"></script>
            
              </div>          
            </ul>
          </div>
        </div>
      </nav>
      


      
      <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/the-nix-company-4Hmj9gkyM6c-unsplash.jpg" width="100px" height="600px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h2>Jaket Pria</h2>
      <a href="jcowo.php" class="btn btn-primary">Klik Disini</a>
        
  
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/amanda-vick-ohWf6YuzOQk-unsplash.jpg"width="100px" height="600px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2>Jaket Wanita</h2>
        <a href="jcewe.php" class="btn btn-primary">Klik Disini</a>
      </div>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="content mt-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
          <div class="row">
            <div class="col-md-12">
            <div class="text-center"><h2><span>Galeri</span>Kami</h2>
 <h5> <p>Tersedia di halaman atas</p></h5>

              <div class="row row-cols-md-3 row-cols-sm-2 p-5">
                <!-- card -->
                
              <img src="img/jkt1.jpg" alt="" >
</div>

<div class="px-4 py-4 bg-secondary text-center mb-3">
<div class="mx-auto w-50">
  <h4 style="font-famiily: cursive;">about us</h4>
  <h6><p class="text-center"><img src="img/bulet.png" align="left" width="80px" class="me-3">Kami menyediakan berbagai macam jaket sesuai kebutuhan yang dibutuhkan dan selalu berusaha memberikan kenyamanan serta kemudahan berbelanja.Anda puas kami senang</p></h6>
</div>
</div>





<div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Buka Setiap Hari.</p>
      <footer class="blockquote-footer">Dari Pukul <cite title="Source Title">09.00 - 20.00</cite></footer>
    </blockquote>
  </div>
</div>








  </div>
</div>
<nav class="navbar bg-dark navbar-expand-lg bg-body-primary">
        <div class="container-fluid">
          <a class="navbar-brand" style="color: aliceblue;"style href="#">Eo.Clothes</a>
          <i class="bi bi-instagram text-light"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
<i class="bi bi-whatsapp text-light"></i>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
        </div>
      </nav>
</body>
</html>