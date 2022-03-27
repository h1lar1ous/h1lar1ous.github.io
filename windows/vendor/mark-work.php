<?php

session_start();
require_once 'connect.php';

$today = date('Y/m/d');

$forMarkCheck = mysqli_query($connect, "SELECT `user_fullname` FROM `works` WHERE `work_date` = '$today' ");

$ygygy = mysqli_fetch_array($forMarkCheck);

$mark = $_POST['mark'];

$dada = mysqli_query($connect, "INSERT INTO `works` (`mark`) VALUES ('$mark') WHERE `user_fullname` = '$ygygy' AND `work_date` = '$today' ");

?>