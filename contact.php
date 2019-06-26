




<?php  include "includes/header.php"; ?>



 

    <!-- Navigation -->
    
    <?php  include "includes/navigation.php"; ?>
    
 
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Contact</h1>
                    <form role="form" action="contact.php" method="post" id="login-form" autocomplete="off">

                        <div class="text-center">
                            <h4> </h4>
                            

                        </div>
                     <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                         <div class="form-group">
                            <label for="Subject" class="sr-only">Subject</label>
                            <input type="text" name="Subject" id="Subject" class="form-control" placeholder="Enter Subject" required>
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Message</label>
                            <textarea class="form-control" name="body" id="body" cols="50" rows="10"></textarea>
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="submit">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "includes/footer.php";?>
<?php require_once("includes/db.php" ); ?>

<?php

if (isset($_POST['submit'])) {
    # code...
    echo "Success";

    $body=$_POST['body'] ;
    $Subject=wordwrap($_POST['Subject'])  ;
    $to="faisal.cse16.kuet@gmail.com" ;
    $header=$_POST['email'] ;

    mail($to, $Subject, $body,$header) ;





}


?>
