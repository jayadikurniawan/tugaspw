<?php
include_once("../model/get_data.php");

class controller
{
    public $getData;

    public function __construct()
    {
        $this->getData = new get_data();
    }

    public function invoke()
    {
        $proker = $this->getData->getData(); 
        include '../views/view.php';
    }

    public function invokeViewOnly()
    {
        $proker = $this->getData->getData(); 
        include '../views/view2.php';
    }
}
