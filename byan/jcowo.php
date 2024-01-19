<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jaket Pria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav>
      <div class="">
      <h3>Eo.clothes</h3>
       
       
      </div> 
      <img src="img/bulet.png" alt="my-avatar" width=45px />
      <div id="menu-icon" class="menu-icon">
        <i class="ph-fill ph-list"></i>
      </div>
      <ul id="menu-list" class="hidden">
        <li>
          <a href="home.php">Home</a>
        </li>
        <li>
          <a href="pesanan.php">pesanan</a>
        </li>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="logout.php">
            <i class="fa fa-user" aria-hidden="true"></i> logout
        </a>
        </li>
      </ul>
       
    </nav>

    <script src="/navbar.js"></script>
            
              </div>          
            </ul>
          </div>
        </div>
      </nav>
  </body>
</html>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
  include "koneksi.php";
   
  $query = "SELECT * FROM barang";
  $sql = mysqli_query($koneksi, $query);
  ?>
 <section id="barang" class "barang">
  <div><Center>
  <h2><span>Menu</span>Kami</h2>
  <p>Berbagai Pilihan Jaket Pria Sesuai Kriteria</p>
  </Center></div>
  <div class="row mt-4">
    <?php
    while($result = mysqli_fetch_array($sql)){
    ?>
     <div class="col-md-3 ml-3 mt-3">
    <div class="card" style="width: 18rem;">
    <img src="img/<?php echo $result['foto']; ?>"style="height: 200px;"class="card-img-top" alt="">
    <div class="card-body">
    <h5 class="card-title text-center"><?php echo $result['nama_barang'];?></h5>
    <p class="card-text mb-3"><b>Rp.<?php echo number_format($result['harga_barang']);?></b></p>
    <a href="checkout.php?id=<?=$result['id_barang']?>" class="btn btn-primary d-block">Beli</a>
    </div>
    </div>
    </div>
    <?php } ?>
  </div>
    </section>

