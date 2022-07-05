<?php
require_once '../Models/User.php';
require_once '../Models/Event.php';

$user = new User();

$allUsers = $user->selectAllUsers();
?>