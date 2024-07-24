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
                <h3>Edit Data Pasien</h3>
                <?php
                include 'koneksi.php';
                $id = $_GET['edit'];
                $anggil = $koneksi->query("SELECT * FROM pasien where idPasien='$id'");
                while ($row = $anggil->fetch_assoc()) {
                ?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idpasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien" value="<?= $row['nmPasien'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?php if ($row['jk'] === 'Perempuan') echo 'checked'; ?>>
                            <label class="form-check-label">Perempuan</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?php if ($row['jk'] === 'Laki-laki') echo 'checked'; ?>>
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"><?= $row['alamat'] ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
