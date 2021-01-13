<?php

declare(strict_types = 1);
require_once('../view/autoLoader.php');
require_once('Config.php');

 //Retrieve the field values from our registration form.
    $firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;
    $surName = !empty($_POST['surName']) ? trim($_POST['surName']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $phoneNumber = !empty($_POST['phoneNumber']) ? trim($_POST['phoneNumber']) : null;
    
    //Now, checking if the supplied email already exists.
    $query = "SELECT COUNT(email) AS num FROM User_Model WHERE email = :email";
    $statement = $pdo->prepare($query);
    
    //Bind the provided username to our prepared statement.
    $statement->bindValue(':email', $email);
    $statement->execute();
    $resultEmail = $statement->fetch(PDO::FETCH_ASSOC);
    
    //If the provided email does not exist, signup
    if($resultEmail['num'] <= 0){
    
        //Hashing the password as we do NOT want to store the passwords in plain text.
        $options = [
        'cost' => 12];
        $passwordHash = password_hash($pass, PASSWORD_BCRYPT, $options);

        //Preparing the INSERT statement.
        $insertQuery = "INSERT INTO User_Model (firstName, surName, email, password, phoneNumber) VALUES (:firstName, :surName, :email, :password, :phoneNumber)";
        $stm = $pdo->prepare($insertQuery);
        $stm->bindValue(':firstName', $firstName);
        $stm->bindValue(':surName', $surName);
        $stm->bindValue(':email', $email);
        $stm->bindValue(':password', $passwordHash);
        $stm->bindValue(':phoneNumber', $phoneNumber);
        $result = $stm->execute();

    //If the signup process is successful.
        if($result){
            echo 'Successful';
            //header('Location: ../view/loginPage.php');
        }
    }
 else 
 {
     echo('EmailExists');
 }
?>

