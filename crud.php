<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <div class="row">

            <div class="col-4">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">home</a>
                    <a href="crud.php" class="list-group-item list-group-item-action">CRUD</a>
                </div>
            </div>
            <div class="col">



                <table class="table table-bordered">

                    <div class="d-flex justify-content-end py-2">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Produk (+)</button>
                    </div>

                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($koneksi, "SELECT * FROM produk");
                        while ($data = mysqli_fetch_object($query)) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data->nama_produk; ?></td>
                                <td><?= $data->keterangan; ?></td>
                                <td><?= $data->harga; ?></td>
                                <td><?= $data->jumlah; ?></td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="edit.php?nama_produk=<?= $data->nama_produk; ?>">EDIT</a>
                                    <a class="btn btn-danger btn-sm" href="hapus.php?nama_produk=<?= $data->nama_produk; ?>">HAPUS</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="tambah_data.php" method="post">
                        <div class="modal-body">
                            <div class="col p-4">
                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label">Nama Produk</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama_produk">
                                    </div>
                                </div>
                            </div>
                            <div class="col p-4">
                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="keterangan">
                                    </div>
                                </div>
                            </div>
                            <div class="col p-4">
                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label">Harga</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="harga">
                                    </div>
                                </div>
                            </div>
                            <div class="col p-4">
                                <div class="row mb-2">
                                    <label class="col-sm-3 col-form-label">Jumlah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Reset</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>