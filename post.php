<?php include "includes/header.php" ?>

<?php include "includes/navigation.php" ?>



   <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">



            <?php
                    if (isset($_GET['p_id'])) {
                        # code...
                        $the_post_id =$_GET['p_id'];
                    
                    $update_query="UPDATE posts SET post_views_count=post_views_count+1 WHERE post_id ={$the_post_id} ";
                    $send_query=mysqli_query($connection,$update_query);
                  
                    $query="SELECT * FROM posts WHERE post_id ={$the_post_id}";
                    $select_all_posts_query= mysqli_query($connection ,$query) ;

                    while ($row =mysqli_fetch_assoc($select_all_posts_query)) 
                    {
                         $post_id=  $row['post_id'] ;
                         $post_title=$row['post_title'] ;
                         $post_author=$row['post_author'] ;
                         $post_date=$row['post_date'] ;
                         $post_content=$row['post_content']  ;
                         $post_image=$row['post_image'] ;

                         
                         
                         

                    ?>

                    
             
                <!-- First Blog Post -->
                <h2>
                    <a href="#"> <?php echo $post_title ?> </a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?>  </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>
                <img class="img-responsive" src="images/<?php echo $post_image?>" alt="">
                <hr>
                <p> <?php echo $post_content ?> </p>
               

                <hr>
                    
                    
                    
                    <?php

                    }
                }
                    
                    
            ?>



<?php

if (isset($_POST['create_comment'])) {
    
    
    $the_comment_post_id=$_GET['p_id'] ;


    $comment_author=$_POST['comment_author'];
    $comment_email=$_POST['comment_email'] ;
    $comment_content=$_POST['comment_content'];

    $query="INSERT INTO comments(comment_post_id,comment_author,comment_email,comment_content,comment_date) 
    VALUES ('{$the_comment_post_id}','{$comment_author}','{$comment_email}','{$comment_content}',now() ) WHERE post_id={$the_comment_post_id} ";

    $insert_comment_query=mysqli_query($connection,$query) ;


    $query="UPDATE posts SET post_comment_count = post_comment_count+1 WHERE post_id={$the_comment_post_id} ";
    $update_comment_count_query=mysqli_query($connection,$query) ;

  






    
}


?>
                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="post">

                         <div class="form-group">
                            <label for="comment_author"> Author</label>
                           <input type="text" name="comment_author" class="form-control" required>
                        </div>

                         <div class="form-group">
                            <label for="comment_email"> Email</label>
                           <input type="email" name="comment_email" class="form-control" required>
                        </div>

                         <div class="form-group">
                            <label for="comment_content">Your Comment</label>
                            <textarea name ="comment_content" class="form-control" rows="3" required></textarea>
                        </div>

                        
                        <button type="submit" class="btn btn-primary" name="create_comment">Submit</button>
                    </form>
                </div>

                <hr>


                
<?php


                $the_comment_post_id=$_GET['p_id'] ;

                $query="SELECT * FROM comments WHERE comment_id ={$the_comment_post_id} ";
                $select_show_comments_query= mysqli_query($connection ,$query) ;

               while ($row =mysqli_fetch_assoc($select_show_comments_query)) 
               {
                   
                   
                    $comment_id =$row['comment_id'];
                    $comment_post_id=$row['comment_post_id'];

                    $comment_author=$row['comment_author'];
                    $comment_email=$row['comment_email'];
                    $comment_content=$row['comment_content'];
                   
                    $comment_date=$row['comment_date'];




                    ?>


                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">


                        <h4 class="media-heading"> <?php echo  $comment_author ;?>
                            <small><?php echo  $comment_date ;?></small>
                        </h4>
                      <?php echo  $comment_content ;?>
                      
                       
                       
                    </div>
                </div>






<?php

                }

?>



            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?> 


        </div>
        <!-- /.row -->

        <hr>
    <!-- Footer -->
    <?php include "includes/footer.php" ?> 