<?php
    session_start();
    require_once 'connect.php';
    

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $institut = $_POST['institut'];
    $unTranscollege = $_POST['college'];
    $password = $_POST['password'];

    $rus=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
    $lat=array('a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');

    $password = md5($password);
    $college = str_replace($rus, $lat, $unTranscollege);

    $path = 'uploads/' . time() . $_FILES['image']['name'];
    if(!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = "Ошибка при загрузке аватара";
        header('Location: ../register.php');
    }

    $unique_id = time() + 135;

    $emailCheck = mysqli_query($connect, "SELECT `email` FROM `users`");
    $emailValid = mysqli_fetch_row($emailCheck);
    

        mysqli_query($connect, "INSERT INTO `users` (`id`, `fullname`, `email`, `date`, `institut`, `college`, `password`, `image`, `isadmin`) VALUES (NULL, '$fullname', '$email', '$date', '$institut', '$college', '$password', '$path', '0')");
        mysqli_query($connect, "INSERT INTO `$college` (`unique_id`, `user_fullname`) VALUES ('$unique_id', '$fullname') ");
      
              $_SESSION['message'] = "Регистрация успешна!";
              header('Location: ../login.php');
    

?>














