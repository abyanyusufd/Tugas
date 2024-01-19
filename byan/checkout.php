<?php 
include "koneksi.php";
session_start();
  $id = $_GET['id'];
   $query="SELECT * FROM barang WHERE id_barang=$id";
   $result= mysqli_query($koneksi,$query);
   $data = mysqli_fetch_array($result);

  if(isset($_POST['Lanjutkan'])){
    echo "<script>
    window.location='cetak.php'</script>";
  }

   
  ?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Checkout</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
 
<form action="" method="post">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="img/bulet.png" alt="" width="72" height="57">
      <h2>Checkout form</h2>
      <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Pesanan</span>
          <span class="badge bg-primary rounded-pill">1</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div class="col-12">
            <div class="col-4"><img class="d-block mx-auto mb-4" src="img/<?=$data['foto']?>" alt="" width="370" height="200"></div>
              <div class="row">
              <div class="col-6"><h5><b><?=$data['nama_barang']?></b></h5>
              <small class="text-body-secondary">harga nett</small></div>
              </div>
              <div class="row">
             
                  
                  <span style="text-align: left;"><?=$data['harga_barang']?></span>
          
                 
                
              </div>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">

          <li class="list-group-item d-flex justify-content-between">
            <span>Total (Rp)</span>
            <strong><?=$data['harga_barang']?></strong>
          </li>
        </ul>

       
      <?php
      if(isset($_POST['checkout'])){
        $nama_pembeli = $_POST['nama_pembeli'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $nama_barang = $_POST['nama_barang'];
        $harga = $_POST['harga'];
        $foto = $data['foto'];

        $_SESSION['nama_barang'] = $nama_barang;
        $_SESSION['phone'] = $phone;
        $_SESSION['rumah'] = $alamat;
        $_SESSION['nama_pembeli'] = $nama_pembeli;
        $_SESSION['harga'] = $harga;

        $query = mysqli_query($koneksi,"INSERT INTO transaksi values('','$nama_pembeli','$phone','$email','$alamat','$nama_barang','$harga','$foto')");
        echo "<script>
    window.location='cetak.php'</script>";
      }
      ?>
      
        <input type="hidden"  name="nama_barang" class="form-control" placeholder="" value="<?=$data['nama_barang']?>">
        <input type="hidden" name="harga" class="form-control" placeholder="" value="<?=$data['harga_barang']?>">



      </div>
      
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Alamat Tagihan</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama</label>
              <input type="text" name="nama_pembeli" class="form-control" id="firstName" placeholder="" value="<?=$_SESSION['nama']?>" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>


            <div class="col-12">
              <label for="username" class="form-label">Phone</label>
              <div class="input-group has-validation">
                <input type="text" name="phone" class="form-control" placeholder="" value="" required>
              <div class="invalid-feedback">
                  Nama pengguna Dibutuhkan.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary"></span></label>
              <input type="email" name="email" class="form-control" id="email" placeholder="...@contoh.com" value="">
              <div class="invalid-feedback">
                Mohon Masukkan Alamat Email Yang Valid Untuk Pembaruan Pengiriman.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">alamat</label>
              <input type="text" name="alamat" class="form-control" id="address" placeholder="1234 Main St" value="" >
              <div class="invalid-feedback">
                Silakan Masukkan Alamat Pengiriman Anda.
              </div>
            </div>

           


  

          <hr class="my-4">
          
          <button name="checkout" class="w-100 btn btn-primary btn-lg" type="submit" >Lanjutkan</button>
          
        

          
        
      </div>
    </div>
    </form>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2017–2023 Eo.Clothes</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script>

      

  </body>
</html>
