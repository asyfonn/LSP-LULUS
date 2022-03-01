<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Daftar Harga Tiket</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="container col-md-8 mt-4">
        <h1>Daftar Harga Tiket</h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-white"><br>
                    <th>No</th>
                    <th>Tempat Wisata</th>
                    <th>Harga</th>
                    </tr>
                    <?php
                    $no = 1;
                    $sql = "select * from lspwisata";
                    $hasil = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['tempat']; ?></td>
                            <td><?php echo $data['harga']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>

                <a class="btn btn-primary" href="index.php" role="button">Kembali</a>
                <a class="btn btn-primary" href="form.php" role="button">Pesan Tiket</a>
</body>

</html>