<?php
class Mahasiswa extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datamahasiswa = mysqli_query($this->koneksi, "SELECT mahasiswa.*, dosen.nama as nama_dosen
                                    FROM mahasiswa JOIN dosen
                                    ON mahasiswa.id_dosen = dosen.id ORDER BY mahasiswa.id DESC"
        );
        return $datamahasiswa;
    }

    // Menambah Data
    public function create($nim, $nama, $id_dosen)
    {
        mysqli_query(
            $this->koneksi,
            "insert into mahasiswa values(null,'$nim','$nama','$id_dosen')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datamahasiswa = mysqli_query(
            $this->koneksi,
            "SELECT mahasiswa.*, dosen.nama as nama_dosen
            FROM mahasiswa JOIN dosen
            ON mahasiswa.id_dosen = dosen.id where mahasiswa.id='$id'"
        );
        return $datamahasiswa;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datamahasiswa = mysqli_query(
            $this->koneksi,
            "select * from mahasiswa where id='$id'"
        );
        return $datamahasiswa;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nim, $nama, $id_dosen)
    {
        mysqli_query(
            $this->koneksi,
            "update mahasiswa set nama='$nama', nim='$nim', id_dosen='$id_dosen' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }
}
