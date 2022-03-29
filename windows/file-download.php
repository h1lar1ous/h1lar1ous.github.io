<?php
    session_start();
    require_once 'vendor/connect.php';

    move_uploaded_file($_FILES['work']['tmp_name'], "works/".$_FILES['work']['name']);
    

    $work_date = date('Y/m/d');
    $user_fullname = $_POST['user_fullname'];

    $check = mysqli_query($connect, "SELECT `work_date` FROM `works` WHERE `user_fullname` = '$user_fullname' AND `work_date` = '$work_date' ");

    $path = 'works/' . $_FILES['work']['name'];

    $aba = mysqli_num_rows($check);

    if($aba != 0) {
        header('Location: works.php');
    } else {
        mysqli_query($connect, "INSERT INTO `works` (`work_path`, `work_date`, `user_fullname`) VALUES ('$path', '$work_date', '$user_fullname')");
        header('Location: works.php');
    }




?>


























