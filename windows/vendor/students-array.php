<?php
    session_start();
    require_once 'connect.php';


    $sql = mysqli_query($connect, 'SELECT `image`, `fullname`, `isadmin` FROM `users` WHERE `isadmin` = 0 ');
      while ($result = mysqli_fetch_array($sql)) {
        echo "";
      
    }
    



?>




