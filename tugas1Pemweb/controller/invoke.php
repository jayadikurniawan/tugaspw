<?php
session_start();
include_once("controller.php");
$controller = new controller();

if ($_SESSION['status'] == 'admin') {
    $controller->invoke();
} else {
    $controller->invokeViewOnly();
}
