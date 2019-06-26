
<?php  include "includes/header.php"; ?>

<?php
if (isset($_COOKIE['somecookie'])) {

    header("Location: homepage.php");
  
}
else
{


?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>

        @import url('https://fonts.googleapis.com/css?family=Numans');

        html,body{
            background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        .container{
            height: 100%;
            align-content: center;
        }

        .card{
            height: 370px;
            margin-top: auto;
            margin-bottom: auto;
            width: 400px;
            background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
            font-size: 60px;
            margin-left: 10px;
            color: #FFC312;
        }

        .social_icon span:hover{
            color: white;
            cursor: pointer;
        }

        .card-header h3{
            color: white;
        }

        .social_icon{
            position: absolute;
            right: 20px;
            top: -45px;
        }

        .input-group-prepend span{
            width: 50px;
            background-color: #FFC312;
            color: black;
            border:0 !important;
        }

        input:focus{
            outline: 0 0 0 0  !important;
            box-shadow: 0 0 0 0 !important;

        }

        .remember{
            color: white;
        }

        .remember input
        {
            width: 20px;
            height: 20px;
            margin-left: 15px;
            margin-right: 5px;
        }

        .login_btn{
            color: black;
            background-color: #FFC312;
            width: 100px;
        }

        .login_btn:hover{
            color: black;
            background-color: white;
        }

        .links{
            color: white;
        }

        .links a{
            margin-left: 4px;
        }
    </style>

    <div class="container" >
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="logincheck.php" method="get">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="email" name="useremail" class="form-control" placeholder="User Email" required>

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="userpassword" class="form-control" placeholder="User password" required>
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" id="logincheck" name="logincheck">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" name="submitbutton" class="btn float-right login_btn">
                        </div>
                    </>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="./registration.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--   <div class="container" >-->
<!--        <div class="row">-->
<!--            <div class="col-xs-6 col-xs-offset-3">-->
<!--                <div class="form-wrap">-->
<!--                <h1 class="text-center">Login </h1>-->
<!--                    <form action="logincheck.php" method="get">-->
<!---->
<!--                       -->
<!--                       -->
<!--                         <div class="form-group">-->
<!--                            <label for="email" class="sr-only">Email</label>-->
<!--                            <input type="email" name="useremail" id="email" class="form-control" placeholder="somebody@example.com" required>-->
<!--                        </div>-->
<!--                         <div class="form-group">-->
<!--                            <label for="password" class="sr-only">Password</label>-->
<!--                            <input type="password" name="userpassword" id="key" class="form-control" placeholder="Password" required>-->
<!--                        </div>-->
<!---->
<!--                         <div class="form-group form-check">-->
<!--                        <input type="checkbox" class="form-check-input" id="logincheck" name="logincheck">-->
<!--                        <label class="form-check-label" for="exampleCheck1">Remember me</label>-->
<!--                      </div>-->
<!--                        -->
<!--                -->
<!--                        <input type="submit" name="submitbutton" id="btn-login" class="btn btn-custom btn-lg btn-block" value="submit">-->
<!--                    </form>-->
<!--                 -->
<!--                </div>-->
<!--            </div> <!-- /.col-xs-12 -->-->
<!--        </div> <!-- /.row -->-->
<!--    </div> <!-- /.container -->-->






<?php
}

?>

    
  
    
