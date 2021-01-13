+<?php
require_once("header.php");

session_start();
if(isset($_SESSION['user_ID']) || isset($_SESSION['logged_in'])){
    //If user is logged in, redirect them back to the owner's page.
    header('Location: ../view/ownerFinderSelection.php');
    exit;
}
?>
<html>
<head>
</head>
<body>

<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row text-black">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
                    <h1 class="display-4 py-2 text-center">Sign up</h1>
                    <div class="px-2">
                            <p>In order to find your vehicle, you must create an account.</p>
                            <form id= "signupForm" action="../controller/signupHandler.php" method = "POST">
                                
                                <div class="form-group">
                                    <label for="formGroupEmailInput">Enter Email</label>
                                    <input type="text" name= "email" class="form-control" id="email" placeholder="Your Email here....">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="formGroupNameInput">Enter First Name</label>
                                    <input type="text" name= "firstName" class="form-control" id="firstName" placeholder="Your first name here...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupNameInput">Enter Surname</label>
                                    <input type="text" name= "surName" class="form-control" id="surName" placeholder="Your surname here...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupPhoneNumberInput">Enter Mobile No.</label>
                                    <input type="number" name= "phoneNumber" class="form-control" id="phoneNumber" placeholder="Your phone number here...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupPasswordInput">Enter Password</label>
                                    <input type="password" name= "password" class="form-control" id="password" placeholder="Your password here...">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupConfirmPasswordInput">Confirm Password</label>
                                    <input type="password" name= "confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm password here...">
                                </div>

                                <input name="signupSubmit" type="submit" value="Sign Up" class="btn btn-primary btn-lg btn-block">
                             </form>
                            <div class = "text-center">
                            <a href = "loginPage.php" >Already have an account? Sign in!</a>
                            </div>
                            <!-- This div appends dialog boxes through jquery-->
                            
                            <div id="alertBoxAppend" style="display: none;">
                            <p class="appendHere" <span style="float:left; margin:12px 12px 20px 0;"></span></p>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>