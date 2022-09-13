<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">



    <title></title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <br>

    <h3 style="margin-left: 8px;">Tambah siswa</h3>
    <form style="margin-left: 8px;" action="proses_tambah_siswa.php" method="POST">
        Nama Siswa :
        <input type="text" name="nama_siswa" value="" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="" class="form-control">

        Gender :
        <select name="gender" class="form-control" id="">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        Alamat :
        <textarea name="alamat" rows="4"></textarea>
        <br>
        <br>
        Kelas :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php
            include "conncet.php";
            $qry_kelas = mysqli_query($myAdmin, "select * from kelas");
            while ($data_kelas = mysqli_fetch_array($qry_kelas)) {
                echo '<option value="' . $data_kelas['id_kelas'] . '">' . $data_kelas['nama_kelas'] . '</option>';
            }
            ?>

        </select>

        Username :
        <input type="text" name="username" value="" class="form-control">
        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-dark">
    </form>



    <script src="js/bootstrap.min.js"></script>
</body>

</html>