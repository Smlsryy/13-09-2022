<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title> Data Siswa
    </title>

</head>

<body>
    <?php
    require "login.php";
    include "navbar.php";
    ?>
    <br>



    <h3 style="text-align: center;">Data Siswa</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Angkatan</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Username</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conncet.php";
            $qry_siswa = mysqli_query($myAdmin, "select * from siswa join kelas on kelas.id_kelas = siswa.id_kelas");
            $no = 0;
            while ($data_siswa = mysqli_fetch_array($qry_siswa)) {
                $no++; ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $data_siswa['nama_siswa'] ?></td>
                    <td><?= $data_siswa['angkatan'] ?></td>
                    <td><?= $data_siswa['tanggal_lahir'] ?></td>
                    <td><?= $data_siswa['alamat'] ?></td>
                    <td><?= $data_siswa['gender'] ?></td>
                    <td><?= $data_siswa['username'] ?></td>
                    <td><?= $data_siswa['nama_kelas'] ?></td>
                    <td><a href="ubah_siswa.php?id_siswa=
                    <?= $data_siswa['id_siswa'] ?>" class="btn btn-success">Ubah</a> | <a href="hapus.php?id_siswa=<?= $data_siswa['id_siswa'] ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data ini ? ')" class="btn btn-danger">Hapus</a></td>


                </tr>

            <?php
            }
            ?>


        </tbody>
    </table>


    <a href="tambah_siswa.php"> <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-dark" style="margin-left: 10px;"></a>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>