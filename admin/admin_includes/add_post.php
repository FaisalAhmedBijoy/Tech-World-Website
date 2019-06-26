


<form method="post" action="" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Post Title</label>
		<input class="form-control" type="text" name="post_title">

	</div>


	<div class="form-group">
		<label for="title">Post Author</label>
		<input class="form-control" type="text" name="post_author">

	</div>



	   <div class="form-group">

        <label for="post_category_id"> Category </label>
        <br>
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
		<input class="form-control" type="file" name="image">

	</div>

	<div class="form-group">
		<label for="post_tags">Post Tags</label>
		<input class="form-control" type="text" name="post_tags">

	</div>

	<div class="form-group">
		<label for="post_content">Post Content</label>
	
		<textarea class="form-control" id="body" cols="30" rows="10" name="post_content"></textarea>

	</div>

	<div class="form-group">
		
		<input class="btn btn-primary" type="submit" name="create_add_post" value="Add Post">

	</div>
	

</form>


<?php

if (isset($_POST['create_add_post'])) {

    
                 
                    $post_author= $_POST['post_author'] ;
                    $post_title= $_POST['post_title'];
                    $post_category_id= $_POST['post_category_id'];
               
                    
                    $post_image=$_FILES['image']['name'];
                    $post_image_temp=$_FILES['image']['tmp_name'];
                    

                    $post_tags=$_POST['post_tags'];
                    $post_content=$_POST['post_content'] ;


                
                    $post_date=date('d-m-y');

                    move_uploaded_file($post_image_temp, "../images/{$post_image}") ;

                    $query="INSERT INTO posts (post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags)VALUES ({$post_category_id} ,'{$post_title}','{$post_author}',now(),'{$post_image}',
                    '{$post_content}','{$post_tags}')" ;

                    $create_post_query=mysqli_query($connection,$query);

                    confirmQuery($create_post_query) ;


}

?>
