<?php
include "user.php";
class mahasiswa extends user
{
    public $nim;
    public $nama;
    public $programStudi;

    public function __construct($username, $password, $emailAddress)
    {   
        parent::setUsername($username);
        parent::setPassword($password);
        parent::setEmailAddress($emailAddress);
    }
}