<?php
include 'koneksi.php';

$np = $_GET['nama_produk'];

mysqli_query($koneksi, "DELETE FROM produk WHERE nama_produk='$np'");

header("location:crud.php");
