<?php
include 'koneksi.php';

$np = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$query = "UPDATE produk SET nama_produk='$np', keterangan='$keterangan', harga='$harga' , jumlah='$jumlah' WHERE nama_produk='$np'";

mysqli_query($koneksi, $query);

header("location:crud.php");
