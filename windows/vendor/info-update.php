<?php
session_start();
require_once 'connect.php';

    $fullname = $_POST['fullname'];
    $date = $_POST['date'];
    $institut = $_POST['institut'];
    $college = $_POST['college'];
    // $path = 'uploads/' . time() . $_FILES['image']['name'];

    $userid = $_SESSION['user']['id'];

    // if(!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)) {
    //     echo "Ошибка при загрузке аватара";
    // }


    if(mb_strlen($fullname) !=0 && mb_strlen($date) !=0 && mb_strlen($institut) !=0 && mb_strlen($college) !=0) {
        $update = mysqli_query($connect, "UPDATE users SET `fullname` = '$fullname', `date` = '$date', `institut` = '$institut', `college` = '$college' WHERE `id` = '$userid' " );
    } else {
        $_SESSION['message'] = "Заполните все поля";
    }

    header('Location: ../account.php');


?>

<!-- if(mb_strlen($fullname) !=0 ) {
        $update = mysqli_query($connect, "UPDATE users SET `fullname` = '$fullname' WHERE `id` = '$userid' " );
    } else if(mb_strlen($date) !=0) {
        $update = mysqli_query($connect, "UPDATE users SET `date` = '$date' WHERE `id` = '$userid' " );
    } else if(mb_strlen($institut) !=0) {
        $update = mysqli_query($connect, "UPDATE users SET `institut` = '$institut' WHERE `id` = '$userid' " );
    } else if(mb_strlen($college) !=0) {
        $update = mysqli_query($connect, "UPDATE users SET `college` = '$college' WHERE `id` = '$userid' " );
    } else {
        $update = mysqli_query($connect, "UPDATE users SET `fullname` = '$fullname', `date` = '$date', `institut` = '$institut', `college` = '$college' WHERE `id` = '$userid' " );
    } -->