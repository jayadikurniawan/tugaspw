<?php
include "pengurusBEM.php";
class menteri extends pengurusBEM
{
    public function __construct($nama, $nim, $angkatan, $jabatan, $foto)
    {   
        parent::setNama($nama);
        parent::setNim($nim);
        parent::setAngkatan($angkatan);
        parent::setJabatan($jabatan);
        parent::setFoto($foto);
    }

    public function setJabatan($jabatan)
    {
        parent::setJabatan($jabatan);
    }

    public function getJabatan()
    {
        return parent::getJabatan();
    }
}


// class menteri extends pengurusBEM
// {
//     public function __construct($nama)
//     {
//         $this->nama = $nama;
//     }
//     function setJabatan($jabatan)
//     { // method
//         $this->jabatan = $jabatan;
//     }
//     public function getJabatan()
//     {
//         echo "$this->jabatan";
//     }
// }