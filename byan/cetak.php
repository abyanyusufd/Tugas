<?php
session_start();
include 'koneksi.php';
?>
   

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nota Pembelian</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body><center>
        <div class="h-[30rem] w-[50rem]     justify-center mx-auto mt-60 rounded-lg shadow-lg pt-2 bg-[#ffe8d6] ">
            <h1 class="text-5xl text-center mt-20 font-serif">Eo.struk</h1>
            
            <div class="mt-8">
                <h5 class="ml-4 text-xl">Nama produk : <?=$_SESSION['nama_barang']; ?> </h5>
                <h5 class="ml-4 text-xl">Harga : <?=$_SESSION['harga']; ?> </h5>
                <h5 class="ml-4 text-xl">Nama Penerima : <?=$_SESSION['nama_pembeli']; ?> </h5>
                <h5 class="ml-4 text-xl">Alamat Penerima : <?=$_SESSION['rumah']; ?> </h5>
                <h5 class="ml-4 text-xl">Phone : <?=$_SESSION['phone']; ?> </h5>
                <div class="  justify-center flex mt-10 w-20 h-10 bg-sky-800 rounded-2xl shadow-2xl "> <a href="" class="btn btn-primary ml-1 mt-1 text-xl font-serif text-slate-200 align-center" onclick="window.print()">Print</a></div>
               
            </div>
            
        </div>
        </center>
    <script>
        window.print();
        </script>
    </body>
    
    </html>
            
      
