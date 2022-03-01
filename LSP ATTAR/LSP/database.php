<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include

?>
<!DOCTYPE html>
<html>

<head>
    <title>Database Pemesanan Tiket</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: salmon;
        }

        table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }

        table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }

        a {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Data Siswa</h1>
        <center>
            <center>
                <br />
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>No HP</th>
                            <th>Wisata</th>
                            <th>Harga</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Anak</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                        $query = "SELECT * FROM dbwisata ORDER BY id ASC";
                        $result = mysqli_query($conn, $query);
                        //mengecek apakah ada error ketika menjalankan query
                        if (!$result) {
                            die("Query Error: " . mysqli_errno($conn) .
                                " - " . mysqli_error($conn));
                        }

                        //buat perulangan untuk element tabel dari data mahasiswa
                        $no = 1; //variabel untuk membuat nomor urut
                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                        // kemudian dicetak dengan perulangan while
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['nik']; ?></td>
                                <td><?php echo $row['nohp']; ?></td>
                                <td><?php echo $row['wisata']; ?></td>
                                <td><?php echo $row['harga']; ?></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td><?php echo $row['jumlah']; ?></td>
                                <td><?php echo $row['anak']; ?></td>
                                <td><?php echo $row['total']; ?></td>
                            </tr>

                        <?php
                            $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                    </tbody>
                </table>
</body>

</html>