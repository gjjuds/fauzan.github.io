<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">

                    <?php
                    include 'koneksi.php';
                    $np = $_GET['nama_produk'];

                    $q = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk='$np'");
                    while ($data = mysqli_fetch_object($q)) {
                    ?>
                        <form action="update.php" method="post">
                            <div class="col">
                                <div class="col p-4">
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label">Nama Produk</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_produk" value="<?= $data->nama_produk ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class=" col p-4">
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="keterangan" value="<?= $data->keterangan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col p-4">
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label">Harga</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="harga" value="<?= $data->harga ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col p-4">
                                    <div class="row mb-2">
                                        <label class="col-sm-3 col-form-label">Jumlah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="jumlah" value="<?= $data->jumlah ?>">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>

                            </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>




    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>