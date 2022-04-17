<!DOCTYPE html>
<html>

<head>
    <title>Read Array Using PHP By Liza</title>
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    thead {
        background-color: #E9D5DA;
    }

    body {
        background-color: #B9F8D3;
    }
    </style>
</head>

<body>

    <center>
        <h2>DATA BUKU</h2>
        <h5>By Liza Umma Nur Hidayah</h5>
    </center>
    <center>
        <table>
    </center>

    <thead>
        <tr>
            <td>No</td>
            <td>Judul</td>
            <td>Pengarang</td>
            <td>Tahun</td>
        </tr>
    </thead>
    <?php
           include "koneksi.php";
           $no = 1;
           $query = mysqli_query($kon, 'SELECT * FROM data_buku');
           while ($data = mysqli_fetch_array($query)) {
           ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['Judul_Buku'] ?></td>
        <td><?php echo $data['Pengarang'] ?></td>
        <td><?php echo $data['Tahun_Terbit'] ?></td>
    </tr>
    <?php } ?>
    </table>
</body>

</html>