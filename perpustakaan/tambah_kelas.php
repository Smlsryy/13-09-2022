<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Menambah Kelas</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <br>

    <h3 style="margin-left: 5px;">Tambah Kelas</h3>
    <form style="margin-left: 5px;" action="proses_tambah_kelas.php" method="POST">
        Nama Kelas :
        <input type="text" name="nama_kelas" value="" class="form-control">
        <br>
        Kelompok :
        <input type="text" name="kelompok" value="" class="form-control">
        <br>
        Angkatan :
        <input type="text" name="angkatan" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-dark">
    </form>




    <!-- JS BOOTSTRAP -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>