
<?php  
                // Put Values to the Form 
               

                if (isset($_GET['p_id'])) {

                    $edit_post_id=$_GET['p_id'];
                    // echo $edit_post_id;
                }

                $query="SELECT * FROM posts WHERE post_id={$edit_post_id} ";
                $select_posts_query= mysqli_query($connection ,$query) ;

                 while ($row =mysqli_fetch_assoc($select_posts_query)) 
                {
                   
                   
                    
                    $post_author=$row['post_author'];
                    $post_title=$row['post_title'];
                    $post_category_id=$row['post_category_id'];
                    $post_status=$row['post_status'];
                    $post_image=$row['post_image'] ;
                    $post_tags=$row['post_tags'];
                    $post_content=$row['post_content'] ;
                  
                    
                }

              

?>

<?php
         //Update Post
        
        if (isset($_POST['update_post'])) {


            $query_post_id=$_GET['p_id'];

           // echo "Foni Is Comming";


                    $post_author=$_POST['post_author'];
                    $post_title=$_POST['post_title'];
                    $post_category_id=$_POST['post_category_id'];
                  
                  
                    $post_tags=$_POST['post_tags'];
                    $post_content=$_POST['post_content'] ;


                    $post_image=$_FILES['image']['name'];
                    $post_image_temp=$_FILES['image']['tmp_name'];

                    move_uploaded_file($post_image_temp, "../images/{$post_image}") ;

                    if (empty($post_image)) {

                        $query ="SELECT * FROM posts WHERE post_id ='{$query_post_id}' " ;
                        $select_image=mysqli_query($connection,$query) ;

                          while ($row =mysqli_fetch_assoc($select_posts_query)) {
                            $post_image=$row['post_image'] ;
                          }
                    }

                    $query="UPDATE posts SET post_title='{$post_title}',post_author='{$post_author}',post_category_id='{$post_category_id}',post_tags='{$post_tags}',post_image='{$post_image}' WHERE post_id='{$query_post_id}' " ;

                    $update_post_query=mysqli_query($connection,$query) ;

                    confirmQuery($update_post_query);

        }


?>




<form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Post Title</label>
        <input class="form-control" type="text" name="post_title" value="<?php echo $post_title;?>">

    </div>


    <div class="form-group">
        <label for="title">Post Author</label>
        <input class="form-control" type="text" name="post_author" value="<?php echo $post_author;?>">

    </div>

    <div class="form-group">

   

        <select id="" name="post_category_id" class="form-control">

 <?php

                   $query="SELECT * FROM categories";
                   $select_category_query= mysqli_query($connection ,$query) ;

                 while ($row =mysqli_fetch_assoc($select_category_query)) 
               {
                    $cat_title=  $row['CAT_TITLE'] ; 
                    $cat_id=$row['CAT_ID'] ;

                    echo "<option value='$cat_id'>{$cat_title} </option>";
                }
    ?>
            

        </select>

    </div>






    <div class="form-group">
        <label for="image">Post Image</label>
        <br>
       

       <img src="../images/<?php echo $post_image ;?>" alt="" width="100">

    </div>

    <div class="form-group">
        <label for="image">Post Image</label>
        <input class="form-control" type="file" name="image">

    </div>

    <div class="form-group">
        <label for="post_tags">Post Tags</label>
        <input class="form-control" type="text" name="post_tags" value="<?php echo $post_tags;?>">

    </div>

    <div class="form-group">
        <label for="post_content">Post Content</label>
    <!--    <input class="form-control" type="text" name="post_content"> -->
        <textarea class="form-control" id="body" cols="30" rows="10" name="post_content"><?php echo $post_content;?></textarea>

    </div>

    <div class="form-group">
        
        <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">

    </div>
    

</form>