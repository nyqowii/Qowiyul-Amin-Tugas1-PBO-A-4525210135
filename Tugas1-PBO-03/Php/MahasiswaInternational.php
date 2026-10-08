<?php

require_once "Mahasiswa.php";

class MahasiswaInternational extends Mahasiswa
{
    private $negaraAsal;

    // Constructor
    public function __construct(
        $nama = "Belum Diisi",
        $nim = "Belum Diisi",
        $umur = 0,
        $negaraAsal = "Belum Diisi"
    ) {
        parent::__construct($nama, $nim, $umur);
        $this->negaraAsal = $negaraAsal;
    }

    // Getter dan Setter negara asal
    public function getNegaraAsal()
    {
        return $this->negaraAsal;
    }

    public function setNegaraAsal($negaraAsal)
    {
        $this->negaraAsal = $negaraAsal;
    }

    // Override method tampilkanInfo
    public function tampilkanInfo()
    {
        parent::tampilkanInfo();
        echo "Negara Asal: " . $this->negaraAsal . "\n";
    }
}
?>
