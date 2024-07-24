<!DOCTYPE html>
<html>
<head>
    <title>My App | Halaman Utama</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <h3>Tambah Data Pasien</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki">
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" cols="5" rows="3" class="form-control" placeholder="Alamat"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
