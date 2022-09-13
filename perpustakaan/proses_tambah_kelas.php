<?php
if ($_POST) {
    $nama_kelas = $_POST['nama_kelas'];
    $kelompok = $_POST['kelompok'];
    $angkatan = $_POST['angkatan'];
    if (empty($nama_kelas)) {
        echo "<script> alert('Harap Mengisi Nama Kelas'); location.href ='tambah_kelas.php'; </script>";
    } elseif (empty($kelompok)) {
        echo "<script> alert('Harap Mengisi Kelompok Anda'); location.href = 'tambah_kelas.php';  </script>";
    } elseif (empty($angkatan)) {
        echo "<script> alert('Harap Mengisi Angkatan Anda'); location.href = 'tambah_kelas.php';  </script>";
    } else {
        include "conncet.php";
        $insert = mysqli_query($myAdmin, "insert into kelas (nama_kelas, kelompok, angkatan) value ('" . $nama_kelas . "','" . $kelompok . "','" . $angkatan . "')");

        if ($insert) {

            echo "<script> alert('Sukses menambahkan Kelas'); location.href='tampil_kelas.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Kelas'); location.href='tambah_kelas.php';</script>";
        }
    }
}
