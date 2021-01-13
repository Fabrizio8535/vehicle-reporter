<?php
require_once("header.php");
?>
<html>
    <body>
    <section id="cover" class="min-vh-100">
        <div id="cover-caption">
            <div class="container">
                <div class="row text-black">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4">
                        <h1 class="display-4 py-2 text-center">Sign In</h1>
                        <div class="px-2">
                            <form id= "loginForm" action="../model.User_Model_Controller.php" method = "POST">
                                <div class="form-group">
                                    <label for="formGroupEmailInput">Enter Email</label>
                                    <input type="text" name= "email" class="form-control" id="email" placeholder="Your Email here....">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupPasswordInput">Enter Password</label>
                                    <input type="password" name= "password" class="form-control" id="password" placeholder="Your password here...">
                                </div>

                                 <input name="loginSubmit" type="submit" value="Sign In" class="btn btn-primary btn-lg btn-block">
                            <div class = "text-center">
                            <a href = "signupPage.php" >Don't have an account? Sign up now!</a>
                            </div>
                            </form>
                            
                            <!-- This div appends dialog boxes through jquery-->
                            <div id="alertBoxAppend" style="display: none;">
                            <p class="appendHereLogin" <span style="float:left; margin:12px 12px 20px 0;"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>