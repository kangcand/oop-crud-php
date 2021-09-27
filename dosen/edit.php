<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
include '../database.php';
$dosen = new Dosen();
foreach ($dosen->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nipd = $data['nipd'];
    $nama = $data['nama'];
}
?>
    <fieldset>
        <legend>Edit Data dosen</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nomor Induk Pengajar Dosen</th>
                    <td><input type="number" name="nipd" value="<?php echo $nipd; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama dosen</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>