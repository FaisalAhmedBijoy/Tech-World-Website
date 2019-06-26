 <!-- Navigation -->
 <?php include "includes/db.php" ?>
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./homepage.php">Tech World</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                    <li>
                        <a href="admin">Admin</a>
                    </li>

                    <li>
                        <a href="registration.php">Registration</a>
                    </li>

                    <li>
                        <a href="contact.php">Contact</a>
                    </li>

                    




                    <?php

                        if (isset($_SESSION['user_role'])) {
                            # code...
                            if (isset($_GET['p_id'])) {

                                $the_post_id=$_GET['p_id'];
                                # code...
                                echo "<li> <a href='admin/posts.php?source=edit_post &p_id={$the_post_ide}'>Edit Post</a> </li>";
                            }
                        }

                    ?>
                    <!-- <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>