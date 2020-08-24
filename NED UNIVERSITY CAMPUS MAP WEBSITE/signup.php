<?php
    require_once 'source/db_connect.php';

    if(isset($_POST['my_submit'])){

    $user_name = $_POST['my_user_name'];
    $email_address = $_POST['my_email'];
    $password = $_POST['my_password'];
    $hash_passowrd = password_hash($password, PASSWORD_DEFAULT);
    $contact_no = $_POST['my_contact_no'];

    try{
        $sql_insert = "INSERT INTO signup_info (USER_NAME, EMAIL_ADDRESS, PASSWORD, CONTACT_NO, DATE_TIME)
        VALUES (:USER_NAME, :EMAIL_ADDRESS, :PASSWORD, :CONTACT_NO, current_timestamp())";
        $statement = $conn->prepare($sql_insert);
        $statement->execute(array(':USER_NAME'=>$user_name, ':EMAIL_ADDRESS'=>$email_address,':PASSWORD'=>$hash_passowrd, ':CONTACT_NO'=>$contact_no));
        if($statement->rowcount()==1){
        $result = header('location: index.html');
        }
    }
    catch (PDOException $e){
        echo "ERROR: ".$e->getMessage();
    }
        

    }

?>

