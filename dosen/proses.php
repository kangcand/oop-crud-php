<?php
include '../database.php';
$dosen = new Dosen();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nipd = $_POST['nipd'];
    $nama = $_POST['nama'];

    if ($aksi == "create") {
        $dosen->create($nipd, $nama);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $dosen->update($id, $nipd, $nama);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $dosen->delete($id);
        header("location:index.php");
    }

}
