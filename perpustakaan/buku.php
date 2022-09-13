<link rel="stylesheet" href="css/bootstrap.css.map">

<?php

include "header.php";

?>

<h2 align="center">Daftar Buku</h2>

<a href="tambah_buku.php?id_buku=" class="btn btn-primary">Tambah Buku</a>

<br>
<br>

<div class="row">

    <?php

    include "conncet.php";

    $qry_buku = mysqli_query($myAdmin, "select * from buku");

    while ($dt_buku = mysqli_fetch_array($qry_buku)) {

    ?>

        <div class="col-md-3">

            <div class="card">

                <img style="width: 365px;height: 400px;" src="img/<?= $dt_buku['foto'] ?> " class="card-img-top">

                <div class="card-body">

                    <h5 class="card-title"><?= $dt_buku['nama_buku'] ?></h5>

                    <p class="card-text"><?= substr($dt_buku['deskripsi'], 0, 20) ?></p>

                    <a href="pinjam_buku.php?id_buku=<?= $dt_buku['id_buku'] ?>" class="btn btn-primary">Pinjam</a>

                </div>

            </div>

        </div>

    <?php

    }

    ?>

</div>

<?php

include "footer.php";

?>