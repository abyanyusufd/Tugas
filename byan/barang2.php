
<?php
include 'koneksi.php';
if(isset($_GET['aksi'])){
    if($_GET['aksi']=="edit"){
        $result = mysqli_query($koneksi,
        "SELECT * FROM barang2 WHERE id_barang='$_GET[id_barang]'");
        while ($sql = mysqli_fetch_array($result)){
            $nama_barang= $sql['nama_barang'];
            $harga_barang= $sql['harga_barang'];
            $foto= $sql['foto'];
        }
    }elseif($_GET['aksi']=="hapus"){
        $hapus = mysqli_query($koneksi,"DELETE FROM barang2 WHERE id_barang='$_GET[id_barang]'");
        if($hapus){
            header("Location: barang2.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barang Cewe</title>
    <link rel="stylesheet" href="navbar.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
  </head>
  <body>
  <nav>
      <div class="">
      <h3>Eo.clothes</h3>
      </div> 
       
        <i class="ph-fill ph-list"></i>
      </div>
      <ul id="menu-list" class="hidden">
      <li><a href="admin.php" class="dropdown-item">data admin</a></li>
            <li><a href="barang.php" class="dropdown-item">barang cowo</a></li>
            <li><a href="barang2.php" class="dropdown-item">barang cewe</a></li>
            <li><a href="pesanan.php" class="dropdown-item">data transaksi</a></li>
      </ul>
      </ul>
      </ul>
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="logout.php">
            <i class="fa fa-user" aria-hidden="true"></i> logout
        </a>
        </li>
      </ul>
    </nav>
      </div> 
    </nav>
    <script src="/navbar.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang cewe</title>
</head>
<body>
    <a href="register.php">Kembali Ke Home</a><br><br>

    <form action="" method="post" enctype="multipart/form-data">
        <table width="25%" border=0>
        <tr>
            <td> Nama Barang </td>
            <td><input type="text" name="nama_barang" value=<?=@$nama_barang?> ></td>
        </tr>
        <tr>
            <td> harga barang </td>
            <td><input type="text" name="harga_barang" value=<?=@$harga_barang?> ></td>
        </tr>
        <tr>
            <td> Foto </td>
            <td><input type="file" name="foto" value=<?=@$foto?>></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
    </form>
    <table border="50">
        <thead>
        <th>no.</th>
            <th>nama barang</th>
            <th>harga barang</th>
            <th>foto</th>
            <th>aksi</th>
            
        </thead>
        <tbody>     
<?php
include 'koneksi.php';
$no=1;
$query = mysqli_query($koneksi, "SELECT * FROM barang2");
while($data=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$no;$no++."</td>";
    echo "<td>".$data['nama_barang']."</td>";
    echo "<td>".$data['harga_barang']."</td>";
    echo "<td><img src='img/".$data['foto']."'></td>";
  ?>
    <td> <a href="barang2.php?aksi=edit&id_barang=<?=$data['id_barang'] ?>">Edit</a>
 <a href="barang2.php?aksi=hapus&id_barang=<?=$data['id_barang'] ?>">Hapus</a> </td>
    </tr>
    </tbody>
<?php } ?>
</table>
<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
    if($_GET['aksi']=="edit"){
    $id_barang = $_GET['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'img/'.$foto);
    $edit = mysqli_query($koneksi, "UPDATE barang2
    set nama_barang='$nama_barang',harga_barang='$harga_barang',foto='$foto' where id_barang='$id_barang'");
     if($edit > 0){
        header("Location: barang2.php");
    }
}else{
    $nama_barang = $_POST['nama_barang'];
    $harga_barang = $_POST['harga_barang'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'img/'.$foto);
   $result = mysqli_query($koneksi, "INSERT INTO barang2(nama_barang,harga_barang,foto) VALUES('$nama_barang','$harga_barang','$foto')");
    if($result > 0){
        header("Location: barang2.php");
}
}
}
?>

</body>
</html>