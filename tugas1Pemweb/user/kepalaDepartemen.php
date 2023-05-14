<?php
include "pengurusBEM.php";
class kepalaDepartemen extends pengurusBEM
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