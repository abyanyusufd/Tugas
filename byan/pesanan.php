<?php 
  session_start();
  include "koneksi.php";
 
   if(!isset($_SESSION['username'])){
    header("Location: register.php");
   }
  $nma=$_SESSION['nama'];
  $query = "SELECT * FROM transaksi where nama_pembeli='$nma'";
  $sql = mysqli_query($koneksi, $query);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pesanan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
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
        <li>
          <a href="logout.php">logout</a>
        </li>
       
    </nav>

    <script src="/navbar.js"></script>
            
              </div>          
            </ul>
          </div>
        </div>
      </nav>
    <?php
    while($result = mysqli_fetch_array($sql)){
    ?>
     <div class="col-md-3 ml-3 mt-3">
    <div class="card" style="width: 18rem;">
    <img src="img/<?php echo $result['foto']; ?>"style="height: 200px;"class="card-img-top" alt="">
    <div class="card-body">
    <h5 class="card-title text-center"><?php echo $result['nama_barang'];?></h5>
    <p class="card-text mb-3"><b>Rp.<?php echo number_format($result['harga']);?></b></p>
    <h5 class="card-title"><?php echo $result['nama_pembeli'];?></h5>
    </div>
    </div>
    </div>
    <?php } ?>

    <script src="/navbar.js"></script>
            
              </div>          
            </ul>
          </div>
        </div>
      </nav>