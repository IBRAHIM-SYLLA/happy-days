<?php
session_start();
require_once '../Models/User.php';
require_once 'security.php';


$user = new User();
$dataUser = $user->verify_and_connect($_SESSION['utilisateurs'][0]['email']);
?>