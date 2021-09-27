<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>
        <nav>
            <a href="/dosen">Data Dosen</a> |
            <a href="/mahasiswa">Data Mahasiswa</a>
        </nav>
    </center>
    <center>Data Dosen</center>
    <fieldset>
        <legend>Data dosen</legend>
        <a href="/dosen/create.php">Tambah Data Dosen</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nomor Induk Pengajar Dosen</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$dosen = new Dosen();
$no = 1;
// var_dump($dosen->index());
foreach ($dosen->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nipd']; ?></td>
                    <td>
                        <a href="/dosen/show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="/dosen/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="/dosen/proses.php" method="post">
                            <input type="text" name="id" value="<?php echo $data['id']; ?>">
                            <input type="text" name="aksi" value="delete">
                            <button type="submit" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
?>
    </fieldset>
</body>

</html>