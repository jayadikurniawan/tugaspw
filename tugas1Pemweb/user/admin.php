<?php
include "user.php";
class admin extends user
{
    public function __construct($username, $password, $emailAddress)
    {   
        parent::setUsername($username);
        parent::setPassword($password);
        parent::setEmailAddress($emailAddress);
    }
}