<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&family=Prata&family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
    <title>PESAT</title>
</head>

<body>
    <img id="header-img" src="" alt="">
    <div class="nav">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="database.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="harga.php">Daftar Harga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form.php">Pesan Tiket</a>
            </li>

        </ul>
    </div>
    <div class="tampilan">
        <h1>SELAMAT DATANG DI ATAWISATA</h1>
        <p>WEBSITE YANG MEMUNGKINKAN ANDA MEMESAN TIKET WISATA. KAPANPUN, DIMANAPUN.</p>
    </div>
    <div class="tampilanwisata">
        <div class="wisata1">
            <h1>KEBUN RAYA BOGOR</h1>
            <a class="btn btn-primary" href="form.php" role="button">30.000 / TIKET</a>
        </div>
        <div class="wisata2">
            <h1>MUSEUM PERJUANGAN</h1>
            <a class="btn btn-primary" href="form.php" role="button">20.000 / TIKET</a>
        </div>
        <div class="wisata3">
            <h1>MUSEUM ZOOLOGI</h1>
            <a class="btn btn-primary" href="form.php" role="button">20.000 / TIKET</a>
        </div>
    </div>
</body>

</html>