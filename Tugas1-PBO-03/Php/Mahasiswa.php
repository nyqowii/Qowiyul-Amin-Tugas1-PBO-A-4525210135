<?php

class Mahasiswa
{
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

    // Getter dan Setter nama
    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Getter dan Setter nim
    public function getNim()
    {
        return $this->nim;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    // Getter dan Setter umur
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
