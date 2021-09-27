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
    <center>Data Mahasiswa</center>
    <fieldset>
        <legend>Data mahasiswa</legend>
        <a href="/mahasiswa/create.php">Tambah Data Mahasiswa</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nomor Induk Mahasiswa</th>
                <th>Nama</th>
                <th>Nomor Dosen</th>
                <th colspan="3">Aksi</th>
            </tr>
            <?php
include '../database.php';
$mahasiswa = new Mahasiswa();
$no = 1;
// var_dump($mahasiswa->index());
foreach ($mahasiswa->index() as $data) {
    ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nama_dosen']; ?></td>

                    <td>
                        <a href="/mahasiswa/show.php?id=<?php echo $data['id']; ?>">Show</a>
                    </td>
                    <td>
                        <a href="/mahasiswa/edit.php?id=<?php echo $data['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="/mahasiswa/proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="hidden" name="aksi" value="delete">
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