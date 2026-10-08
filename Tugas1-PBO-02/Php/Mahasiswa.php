<?php

// Kelas Mahasiswa dengan constructor, setter, dan getter
class Mahasiswa
{
    // Variabel instance
    private $nama;
    private $nim;
    private $umur;

    // Constructor
    public function __construct($nama = "Belum Diisi", $nim = "Belum Diisi", $umur = 0)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->umur = $umur;
    }

    // Getter dan Setter untuk nama
    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Getter dan Setter untuk nim
    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // Getter dan Setter untuk umur
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Method untuk menampilkan informasi mahasiswa
    public function tampilkanInfo()
    {
        echo "Nama: " . $this->nama . "\n";
        echo "NIM: " . $this->nim . "\n";
        echo "Umur: " . $this->umur . "\n";
    }
}
?>
