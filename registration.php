<?php session_start() ;?>
<?php  include "includes/header.php"; ?>

    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    

    <div class="container">                  
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1 class="text-center">Register / Sign Up</h1>
                    <form action="" method="post">

                       
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter  Username" required>
                        </div>
                           <div class="form-group">
                            <label for="user_firstname" class="sr-only">First name</label>
                            <input type="text" name="user_firstname" id="user_firstname" class="form-control" placeholder="Enter First name" required>
                        </div>
                           <div class="form-group">
                            <label for="user_lastname" class="sr-only">Last name</label>
                            <input type="text" name="user_lastname" id="user_lastname" class="form-control" placeholder="Enter Last name" required>
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" required>
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="form-group">
                            <label for="mobile_number" class="sr-only">Mobile Number</label>
                            <input type="text" name="mobile_number" id="key" class="form-control" placeholder="Mobile Number" required>
                        </div>
                        
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->

<?php include "includes/footer.php";?>
<?php require_once("includes/db.php" ); ?>

<?php

if (isset($_POST['submit'])) {
    # code...
    echo "Success";

    $username=$_POST['username'] ;
    $password=$_POST['password'] ;
    $email=$_POST['email'] ;
    $user_firstname=$_POST['user_firstname'] ;
    $user_lastname=$_POST['user_lastname'] ;
    $mobile_number=$_POST['mobile_number'] ;

    $_SESSION['user_email']=$email ;
    $_SESSION['user_passward']=$password;






    $query="INSERT INTO users (username,user_firstname,user_lastname,user_passward,user_email,mobile_number) 
    VALUES ('{$username}','{$user_firstname}','{$user_lastname}','{$password}','{$email}','{$mobile_number}') ";

    $register_user_query=mysqli_query($connection,$query) ;

    if (!$register_user_query) {
      
        die("QUERY FAILED " . mysqli_error($connection)) ;
    }
   

}

?>
