<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $mahasiswa = new Mahasiswa();
    foreach ($mahasiswa->show($_GET['id']) as $data) {
        $id = $data['id'];
        $nim = $data['nim'];
        $nama = $data['nama'];
        $nama_dosen = $data['nama_dosen'];
    }
    ?>
    <fieldset>
        <legend>Show Data Mahasiswa</legend>
        <table>
            <tr>
                <th>Nomor Induk Siswa</th>
                <td><input type="number" name="nis" value="<?php echo $nim; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama Dosen</th>
                <td><input type ="text" name="nam" cols="40" value="<?php echo $nama_dosen; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>