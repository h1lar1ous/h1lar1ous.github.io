<?php
    session_start();
    require_once 'connect.php';

    
    $rus=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
    $lat=array('a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya','a','b','v','g','d','e','e','gh','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','ch','sh','sch','y','y','y','e','yu','ya',' ');



    $unTransclassname = $_POST['classname'];
    $classname = str_replace($rus, $lat, $unTransclassname);

    $group_creation = "CREATE TABLE IF NOT EXISTS $classname
    (
    unique_id INT NOT NULL AUTO_INCREMENT,
    user_fullname VARCHAR(255),
    PRIMARY KEY(unique_id)
    )";

    $result = mysqli_query($connect, $group_creation);

    if($result) {
        header('Location: ../admin-account.php');
    }
    
?>

