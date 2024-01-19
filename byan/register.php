<?php
include "koneksi.php";
session_start();
if(isset($_POST['login'])){
    $ussername=$_POST['ussername'];
    $password=$_POST['password'];
    $query= mysqli_query($koneksi, "SELECT * FROM pembeli WHERE username='$ussername' and password='$password'");
    if($data =mysqli_fetch_array($query)){
        $_SESSION['username']=$data['username'];
        $_SESSION['alamat']=$data['alamat'];
        $_SESSION['email']=$data['email'];
        $_SESSION['nohp']=$data['no_hp'];
        $_SESSION['nama']=$data['nama_pembeli'];

        echo "<script>
        alert('Berhasil Login!')
        window.location = 'home.php';
        </script>";
       
    }else{
        echo "<script>
        alert('Username atau Password tidak sesuai!')
        window.location = 'register.php';
        </script>";
    }
}
if(isset($_POST['daftar'])){
    $name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $pw = $_POST['pw'];
    $pw2 = $_POST['pw2'];
    $queryy = mysqli_query($koneksi, "SELECT * from pembeli where username='$username'");
    $cek_login = mysqli_num_rows($queryy);

    if($cek_login > 0){
        echo "<script>
        alert('username telah digunakan');
        window.location = 'register.php';
        </script>";
    }else{
        if ($pw != $pw2){
            echo"<script>
            alert('konfirmasi password tidak sesuai');
            window.localtion = 'register.php';
            </script>";
        }else{
            mysqli_query($koneksi,"INSERT INTO pembeli VALUE('$name','','$alamat','$email','$no_hp','$username','$pw')");

            $_SESSION['user']=$_POST['username'];
            $_SESSION['alamatt']=$_POST['alamat'];
            $_SESSION['emaill']=$_POST['email'];
            $_SESSION['no_hp']=$_POST['no_hp'];
            $_SESSION['name']=$_POST['nama'];
             echo "<script>
                    alert('data berhasil dikirim');
                    window.location = 'home.php';
                    </script>";
        }
    }
}
?>










<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="regis.css">
</head>
<body>
   <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
         <header>login to Eo.clothes</header>
         <form action="register.php" method="post">
            <input type="text" placeholder="username" name="ussername">
            <input type="password" placeholder="Masukan password" name="password">
            <a href="#">Lupa password?</a>
            <input type="submit" value="login" name="login" class="submit">
         </form>
         <div class="signup">
            <span class="signup">Belum punya akun?
            <label for="check">Daftar</label>
            </span>
         </div>
    </div>
    <div class="registration form">
        <header>register form</header>
            <form action="register.php" method="post">
                <input type="text" placeholder="Nama lengkap" name="nama">
                <input type="text" placeholder="Alamat" name="alamat">
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="no hp" name="no_hp">
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Masukan password" name="pw">
                <input type="password" placeholder="Masukan ulang password" name="pw2">
                <input type="submit" value="daftar" name="daftar" class="submit">
            </form>
            <div class="signup">
                <span class="signup">Sudah punya akun?
                    <label for="check">Login</label>
                </span>
            </div>
    </div>
</div>
</body>
</html>