<?php
require_once ('Config.php');
require_once('../view/autoLoader.php');

//Retrieve the field values from our login form.
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    //Retrieve the user account information for the given username.
    $query = "SELECT * FROM User_Model WHERE email = :email";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    //$user = $statement->fetch(PDO::FETCH_ASSOC);
    $user = $statement->fetchAll(PDO::FETCH_CLASS, "User_Model");
    
    //If $owner is FALSE.
    if($user == false){
        die('Incorrect email(highly)/password combination');
    } 
    else
    {
        //Compare the passwords.
        $verifyPassword = password_verify($password, $user['password']);
        if($verifyPassword){
            //Provide the user with a login session.
            /*$_SESSION['user_ID'] = $user['userID'];
            $_SESSION['user_name'] = $user['firstName'];
            $_SESSION['user_surname'] = $user['surName'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_password'] = $user['password'];
            $_SESSION['user_phoneNumber'] = $user['phoneNumber'];
            $_SESSION['logged_in'] = time();*/
            //Redirect to our protected page, which we called ownerFinderSelection.php
            echo 'SuccessfulLogin';
            //header('Location: ../view/ownerFinderSelection.php');
            exit;
        }
        else
        {
            die("Incorrect email / password (highly) combination!");            
        }

    }