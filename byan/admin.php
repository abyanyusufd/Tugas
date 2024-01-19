<?php
include 'koneksi.php';
if(isset($_GET['aksi'])){
    if($_GET['aksi']=="edit"){
        $result = mysqli_query($koneksi,
        "SELECT * FROM pengguna WHERE id_pengguna='$_GET[id_pengguna]'");
        while ($sql = mysqli_fetch_array($result)){
            $nama_pengguna= $sql['nama_pengguna'];
            $ussername= $sql['ussername'];
            $password= $sql['password'];
            $foto= $sql['foto'];
        }
    }elseif($_GET['aksi']=="hapus"){
        $hapus = mysqli_query($koneksi,"DELETE FROM pengguna WHERE id_pengguna='$_GET[id_pengguna]'");
        if($hapus){
            header("Location: admin.php");
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
    <title>Admin</title>
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
    <title>Tambah Data Pengguna</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table width="25%" border=0>
        <tr>
            <td> Nama Pengguna</td>
            <td><input type="text" name="nama_pengguna" value=<?=@$nama_pengguna?> ></td>
        </tr>
        <tr>
            <td> Username </td>
            <td><input type="text" name="ussername" value=<?=@$ussername?> ></td>
        </tr>
        <tr>
            <td> Password</td>
            <td><input type="text" name="password" value=<?=@$password?> ></td>
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
            <th>nama_pengguna</th>
            <th>ussername</th>
            <th>password</th>
            <th>foto</th>
            <th>aksi</th>
            
        </thead>
        <tbody>     
<?php
include 'koneksi.php';
$no=1;
$query = mysqli_query($koneksi, "SELECT * FROM pengguna");
while($data=mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$no;$no++."</td>";
    echo "<td>".$data['nama_pengguna']."</td>";
    echo "<td>".$data['ussername']."</td>";
    echo "<td>".$data['password']."</td>";
    echo "<td><img src='img/".$data['foto']."'></td>";
  ?>
    <td> <a href="admin.php?aksi=edit&id_pengguna=<?=$data['id_pengguna'] ?>">Edit</a>
 <a href="admin.php?aksi=hapus&id_pengguna=<?=$data['id_pengguna'] ?>">Hapus</a> </td>
    </tr>
    </tbody>
<?php } ?>
</table>
<?php
include 'koneksi.php';
if (isset($_POST['submit'])){
    if($_GET['aksi']=="edit"){
    $id_pengguna = $_GET['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $ussername = $_POST['ussername'];
    $password = $_POST['password'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'img/'.$foto);
    $edit = mysqli_query($koneksi, "UPDATE pengguna
    set nama_pengguna='$nama_pengguna',ussername='$ussername',password='$password',foto='$foto' where id_pengguna='$id_pengguna'");
     if($edit > 0){
        header("Location: admin.php");
    }
}else{
    $nama_pengguna = $_POST['nama_pengguna'];
    $ussername = $_POST['ussername'];
    $password = $_POST['password'];
    $foto = $_FILES['foto']['name'];
    $file_tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp,'img/'.$foto);
    $result = mysqli_query($koneksi, "INSERT INTO pengguna(id_pengguna,nama_pengguna,ussername,password,foto) VALUES('$id_pengguna','$nama_pengguna','$ussername','$password','$foto')");
    if($result > 0){
        header("Location: admin.php");
}
}
}
?>
</body>
</html>