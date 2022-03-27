<?php
    session_start();
    require_once 'connect.php';

    if(isset($_FILES['work'])) {
        $errors = array();
        $file_name = $_FILES['work']['name'];
        $file_size = $_FILES['work']['size'];
        $file_tmp = $_FILES['work']['tmp-name'];
        $file_type = $_FILES['work']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['work']['name'] )));
    }
        
    //     if(empty($errors) == true) {
    //         move_uploaded_file($file_tmp, "../works/" . $file_name);
    //         echo "Success";
    //         mysqli_query($connect, "INSERT INTO `works` (`file_name`, `file_date`, `file_path`) VALUES ('', '') ")
    //     } else {
    //         print $errors;
    //     }
    // }

    $path = 'works/' . time() . $_FILES['work']['name'];
    if(!move_uploaded_file($_FILES['work']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = "Ошибка при загрузке файла";
        header('Location: ../works.php');
    }

    $work_date = date('Y/m/d');
    $user_fullname = $_POST['user_fullname'];

    $check = mysqli_query($connect, "SELECT `work_date` FROM `works` WHERE `user_fullname` = '$user_fullname' AND `work_date` = '$work_date' ");

    $aba = mysqli_num_rows($check);

    if($aba != 0) {
        $_SESSION['message'] = "АШИБКА";
        header('Location: ../works.php');
    } else {
        mysqli_query($connect, "INSERT INTO `works` (`work_path`, `work_date`, `user_fullname`) VALUES ('$path', '$work_date', '$user_fullname')");
      
        $_SESSION['message'] = "Файл успешно загружен!";
        header('Location: ../works.php');
    }




?>














