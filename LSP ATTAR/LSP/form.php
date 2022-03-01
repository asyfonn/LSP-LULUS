<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Wisata</title>
</head>
<!--Pilih data barang dengan combo box-->

<body>
    <div class="container">
        <h1> Pilih Wisata</h1>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Wisata </td>
                    <td>:</td>
                    <td>

                        <select name="id" value="">
                            <?php
                            include "koneksi.php";
                            $sql = "SELECT * FROM dbwisata";
                            $hasil = mysqli_query($conn, $sql);

                            while ($data = mysqli_fetch_array($hasil)) {
                                $ket = "";
                                if (isset($_GET['id'])) {
                                    $id = trim($_GET['id']);

                                    if ($id == $data['id']) {
                                        $ket = "selected";
                                    }
                                }
                            ?>

                                <option <?php echo $ket; ?> value="<?php echo $data['id']
                                                                    ?>"> <?php echo $data['id']; ?>
                                    - <?php echo $data['wisata']; ?>
                                </option>
                            <?php
                            }
                            ?>

                        </select>
                    </td>
                    <td>
                        <button type="submit" name="submit">Pilih</button>
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $sql = "SELECT * FROM dbwisata WHERE id = $id";
            $hasil = mysqli_query($conn, $sql);
            $data =  mysqli_fetch_assoc($hasil);
        }
        ?>
        <h1>Form Pemesanan</h1>
        <form method="POST" action="proses.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value=""></td>
                </tr>
                <tr>
                    <td>Nomor Identitas</td>
                    <td>:</td>
                    <td><input type="text" name="nik" value=""></td>
                </tr>
                <tr>
                    <td>No.HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value=""></td>
                </tr>
                <tr>
                    <td>Wisata</td>
                    <td>:</td>
                    <td><input type="text" id="wisata" name="wisata" value="<?php if (isset($data['wisata'])) echo $data['wisata']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" id="harga" name="harga" value="<?php if (isset($data['harga'])) echo $data['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Kunjungan</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal" value="tanggal"></td>
                </tr>
                <tr>
                    <td>Jumlah Pengunjung</td>
                    <td>:</td>
                    <td><input type="number" id="jumlah" name="jumlah" value=""></td>
                </tr>
                <tr>
                    <td>Pengunjung Anak-Anak</td>
                    <td>:</td>
                    <td><input type="number" id="anak" name="anak" value=""></td>
                </tr>
                <tr>
                    <td>Total Bayar</td>
                    <td>:</td>
                    <td><input type="text" id="total" name="total" value=""></td>
                </tr>
            </table>
            <br>

            <button id="total">Hitung Total Bayar</button>
            <input type="submit" name="Pesan Tiket" value="Pesan Tiket">
            <input type="submit" name="Cancel" value="Cancel">
        </form>

        <script>
            const jumlah = document.querySelector('form #jumlah')
            jumlah.onclick = (e) => {
                e.preventDefault();
                var v1 = document.querySelector('form #harga').value;
                var v2 = document.querySelector('form #jumlah').value;
                var v3 = document.querySelector('form #anak').value;
                var jika = v2 - v3;
                var hasil = jika * v1;

                document.querySelector('form #total').value = hasil;
            }
        </script>


</body>

</html>