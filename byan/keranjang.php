<?php
session_start();
$koneksi = mysqli_connect("localhost", "root" , "" , "jaket");

    if(isset($_POST["add"])){
        $item_array_id = array_column($_SESSION["keranjang"],"id_barang");
        if(in_array($_GET["id_barang"],$item_array_id)){
            $count = count($_SESSION["keranjang"]);
            $item_array = array(
                'id_barang' => $_GET["id_barang"],
                'nama_barang' => $_GET["hidden_name"],
                'harga_barang' => $_GET["hidden_price"],
                'item_quantity' => $_GET["quantity"],
            );
            $_SESSION["keranjang"][$count] = $item_array;
            echo '<script>alert("Produk berhasil dimasukkan keranjang")</script>';
            echo '<script>window.location="keranjang.php"</script>';
        }else{
            echo '<script>alert("Produk sudah dimasukkan keranjang")</script>';
            echo '<script>window.location="keranjang.php"</script>';
        }
    }else{
        $item_array = array(
            'id_barang' => $_GET["id_barang"],
            'nama_barang' => $_GET["hidden_name"],
            'harga_barang' => $_GET["hidden_price"],
            'item_quantity' => $_GET["quantity"],
        ); 
        $_SESSION["keranjang"][0] = $item_array;
        echo '<script>alert("Produk berhasil dimasukkan keranjang")</script>';
        echo '<script>window.location="keranjang.php"</script>';
    }
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["keranjang"] as $keys => $value){
                if($value["id_barang"] == $_GET["id_barang"]){
                    unset($_SESSION["keranjang" ][$keys]);
                    echo '<script>alert("Produk dihapus")</script>';
                    echo '<script>window.location="keranjang.php"</script>';
                }
                }
            }
        }
    
?>
<?php
$query = "SELECT * FROM barang";
$result = mysqli_query($koneksi,$query);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_array($result)){

    }
}

?>
<div class="col-md-3">
    <form method="post" action="keranjang.php?id=<?$row["id_barang"]?>">
    <div class="barang">
    <img src="<?=$row["foto"]?>" class="img-responsive">
    <h5 class="text-info"><?=$row["nama_barang"]?></h5>
    <h5 class="text-danger"><?=$row["harga_barang"]?></h5>
    <input type="number" name="quantity" class="form-control" value="1">
    <input type="hidden" name="hidden_name" class="<?=$row['nama_barang']?>">
    <input type="hidden" name="hidden_price" class="<?=$row['harga_barang']?>">
    <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-succes" value="tambah ke keranjang">
    </div>
    </form>
</div>