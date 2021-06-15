<?php
include 'config.php';
$id = $_GET['id'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id ='$id'");
while ($data = mysqli_fetch_assoc($mahasiswa)){
?>
    <!doctype html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title><?php echo $data['nama'] ?></title>
    </head>

    <body onload="window.print();">
        <div class="container mt-5">
            <p class="fw-bold">Profil Mahasiswa</p>
            <p>Nama: <?php echo $data['nama'] ?></p>
            <p>NIM: <?php echo $data['nim'] ?></p>
            <p>ALamat: <?php echo $data['alamat'] ?></p>
        </div>
    <?php
}
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
    </html>