<?php
include 'db.php'; 
require 'session.php';
Session::start();
Session::destroy();
header('Location:../index.php');
exit();
?>