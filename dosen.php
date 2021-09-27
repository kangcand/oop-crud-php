<?php
class Dosen extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datadosen = mysqli_query($this->koneksi, "select * from dosen");
        // var_dump($datadosen);
        return $datadosen;
    }

    // Menambah Data
    public function create($nipd, $nama)
    {
        mysqli_query(
            $this->koneksi,
            "insert into dosen values(null,'$nipd','$nama')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from dosen where id='$id'"
        );
        return $datadosen;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from dosen where id='$id'"
        );
        return $datadosen;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nipd, $nama)
    {
        mysqli_query(
            $this->koneksi,
            "update dosen set nama='$nama', nipd='$nipd' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }
}
