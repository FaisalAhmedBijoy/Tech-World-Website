<?php include "includes/header.php" ?>

<?php include "includes/navigation.php" ?>


   <!-- Navigation -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">



            <?php
                    if (isset($_GET['category'])) {

                        $the_category_id=$_GET['category'] ;
                        # code...
                    }
                    
                  
                    $query="SELECT * FROM posts WHERE post_category_id ={$the_category_id}";
                    $select_all_posts_query= mysqli_query($connection ,$query) ;

                    while ($row =mysqli_fetch_assoc($select_all_posts_query)) 
                    {
                         $post_id=  $row['post_id'] ;
                         $post_title=$row['post_title'] ;
                         $post_author=$row['post_author'] ;
                         $post_date=$row['post_date'] ;
                         $post_content=$row['post_content'] ;
                         $post_image=$row['post_image'] ;

                         
                         
                     ?>

                    
                    

               
                <!-- First Blog Post -->
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"> <?php echo $post_title ?> </a>
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