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
                        $the_post_author=$_GET['author'];
                    }
                    
                  
                    $query="SELECT * FROM posts WHERE post_author = '{$the_post_author}' ";
                    $select_all_posts_query= mysqli_query($connection ,$query) ;

                    while ($row =mysqli_fetch_assoc($select_all_posts_query)) 
                    {
                         $post_id=  $row['post_id'] ;
                         $post_title=$row['post_title'] ;
                         $post_author=$row['post_author'] ;
                         $post_date=$row['post_date'] ;
                         $post_content=substr($row['post_content'], 0,100)  ;
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
                    
                    
            ?>



<?php

if (isset($_POST['create_comment'])) {
    
    
    $the_comment_post_id=$_GET['p_id'] ;



    $comment_author=$_POST['comment_author'];
    $comment_email=$_POST['comment_email'] ;
    $comment_content=$_POST['comment_content'];

    $query="INSERT INTO comments(comment_post_id,comment_author,comment_email,comment_content,
    comment_status,comment_date) 
    VALUES ('{$the_comment_post_id}','{$comment_author}','{$comment_email}','{$comment_content}','Unapprove',now() )";

    $insert_comment_query=mysqli_query($connection,$query) ;


    $query="UPDATE posts SET post_comment_count = post_comment_count+1 ";
    $update_comment_count_query=mysqli_query($connection,$query) ;

  






    
}


?>











                <!-- Second Blog Post -->
            

                <!-- Third Blog Post -->
             

                <!-- Pager -->
             

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?> 


        </div>
        <!-- /.row -->

        <hr>
    <!-- Footer -->
    <?php include "includes/footer.php" ?> 