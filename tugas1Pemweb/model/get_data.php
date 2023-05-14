<?php
require "koneksiMVC.php";

class get_data
{
    public $hasil = array();
    public $dbConn;
    protected $tablename = 'mahasiswa';

    public function __construct()
    {
        global $mysqli;
        $this->dbConn = $mysqli;
    }

    public function getData()
    {
        $stmt = $this->dbConn->prepare("SELECT * FROM $this->tablename");
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    }
}
