<?php
include 'koneksi.php';


$np = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO produk VALUES ('$np' , '$keterangan' , '$harga' , '$jumlah')";

mysqli_query($koneksi, $query);

header("location:crud.php");
