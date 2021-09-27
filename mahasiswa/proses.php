<?php
include '../database.php';
$mahasiswa = new Mahasiswa();

if (isset($_POST['save'])) {
    $aksi = $_POST['aksi'];
    $id = @$_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $id_dosen = $_POST['id_dosen'];

    if ($aksi == "create") {
        $mahasiswa->create($nim, $nama, $id_dosen);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $mahasiswa->update($id, $nim, $nama, $id_dosen);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $mahasiswa->delete($id);
        header("location:index.php");
    }

}
