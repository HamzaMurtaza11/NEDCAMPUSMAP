<?php
    
    $user_name = "root";
    $password = "";
    $dsn = 'mysql:host=localhost; dbname=signup_info';

    try{
        $conn = new PDO($dsn, $user_name, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    } catch(PDOException $e){
        echo "Fail to connect to database ".$e->getMessage();
    }

?>


