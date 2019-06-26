



<?php include "includes/header.php" ?>

<?php include "includes/navigation.php" ?>


   <!-- Navigation -->

    <!-- Page Content -->
    <div class="container" >

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">



            <?php
                    $per_page=3;

                    if (isset($_GET['page'])) {

                        $page =$_GET['page'] ;

                
                    }
                    else{
                        $page="" ;
                    }

                    if ($page=="" || $page==1) {

                        $page1=0 ;
                    }
                    else{
                        $page1=($page *$per_page )- $per_page ;
                    }
                    
                    $post_count_query="SELECT * FROM posts ";
                    $select_count_posts_query= mysqli_query($connection ,$post_count_query) ;
                    $post_count= mysqli_num_rows($select_count_posts_query);
                    $post_count=ceil($post_count/$per_page) ;


                    $query="SELECT * FROM posts LIMIT $page1,$per_page ";
                    $select_all_posts_query= mysqli_query($connection ,$query) ;

                    while ($row =mysqli_fetch_assoc($select_all_posts_query)) 
                    {
                         $post_id=  $row['post_id'] ;
                         $post_title=$row['post_title'] ;
                         $post_author=$row['post_author'] ;
                         $post_date=$row['post_date'] ;
                        
                         $post_image=$row['post_image'] ;

                        $post_content=$row['post_content'];
                        $post_staus=$row['post_status'];

                    ?>

             
                <h2>
                    <a href="post.php?p_id=<?php echo $post_id ?>"> <?php echo $post_title ?> </a>
                </h2>
                <p class="lead">
                    by <a href="author_post.php?author=<?php echo $post_author ?> &p_id=<?php echo $post_id ?>"><?php echo $post_author ?>  </a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                <hr>

                <a href="post.php?p_id=<?php echo $post_id ?>">
                <img class="img-responsive" src="images/<?php echo $post_image?>" alt="">
                
                </a>


                <hr>
                <p> <?php echo $post_content ?> </p>
              

                <hr>
                    

                    
                    <?php

      

                }
                    
                    
            ?>


            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php" ?> 


        </div>
        <!-- /.row -->

        <hr>



        <ul class="pager">

            <?php

            for($i=1;$i<=$post_count;$i++)
            {

                if ($i==$page ) {

                     echo "<li> <a  class='active_link' href='index.php?page={$i}'>{$i}</a> </li>";
                }
                else
                {
                      echo "<li> <a href='homepage.php?page={$i}'>{$i}</a> </li>";
                }
              
            }

            ?>


        </ul>


    <!-- Footer -->
    <?php include "includes/footer.php" ?> 