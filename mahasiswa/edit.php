<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Create Data</title>
</head>
<?php
include '../database.php';
$dosen = new Dosen();

$mahasiswa = new Mahasiswa();
foreach ($mahasiswa->edit($_GET['id']) as $data) {
    $id = $data['id'];
    $nim = $data['nim'];
    $nama = $data['nama'];
    $id_dosen = $data['id_dosen'];
}
?>
<body>
    <fieldset>
        <legend>Input Data Mahasiswa</legend>
        <form action="/mahasiswa/proses.php" method="post">
        <input type="hidden" name="aksi" value="update">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nomor Induk Mahasiswa</th>
                    <td><input type="number" name="nim" value="<?php echo $nim; ?>" required></td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Pilih Dosen Mahasiswa</th>
                    <td>
                        <select name="id_dosen">
                            <?php
                                foreach ($dosen->index() as $data) {?>
                                <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        <button type="submit" name="save" >Simpan </button>
                    </th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>
