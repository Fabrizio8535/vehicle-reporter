<?php 
require_once('header.php');
?>
<!DOCTYPE html>
<html>
<body>
    <div class="text-center">
    <button id= "showcaseButton" type="button" class="btn btn-primary btn-lg">MyButton</button>
    <?php
    $user = DatabaseHandler::getInstance()->get('User_Model', array('email', '=', 'h@gmail.com'));
    
    if(!$user->count())
    {
        echo 'No user';
    }
    else 
    {
        echo $user->firstResult()->firstName;
    }
    ?>
    </div>
</body>
</html>