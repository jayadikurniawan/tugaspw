<?php
class pengurusBEM
{
    public $nama;
    private $nim;
    private $angkatan;
    public $jabatan;
    private $foto;

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setNim($nim)
    {
        $this->nim = $nim;
    }

    public function getNim()
    {
        return $this->nim;
    }

    public function setAngkatan($angkatan)
    {
        $this->angkatan = $angkatan;
    }

    public function getAngkatan()
    {
        return $this->angkatan;
    }

    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;
    }

    public function getJabatan()
    {
        return $this->jabatan;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getFoto()
    {
        return $this->foto;
    }
}





// class pengurusBEM
// {
//     public $nama;
//     public $nim;
//     public $angkatan;
//     private $jabatan;
//     private $foto;
//     public function setNama($nama)
//     {
//         $this->nama = $nama;
//     }
//     public function getNama()
//     {
//         echo "$this->nama";
//     }
//     private function setJabatan($jabatan)
//     {
//         $this->jabatan = $jabatan;
//     }
//     public function getJabatan()
//     {
//         echo "$this->jabatan";
//     }
// } -->
