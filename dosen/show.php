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
$dosen = new Dosen();
foreach ($dosen->show($_GET['id']) as $data) {
    $id = $data['id'];
    $nipd = $data['nipd'];
    $nama = $data['nama'];
}
?>
    <fieldset>
        <legend>Show Data dosen</legend>
        <table>
            <tr>
                <th>Nomor Induk Pengajar Dosen</th>
                <td><input type="number" name="nipd" value="<?php echo $nipd; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nama dosen</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>