
<?php  
                // Put Values to the Form 
               

                if (isset($_GET['edit_user_id'])) {

                    $edit_user_id=$_GET['edit_user_id'];
                    // echo $edit_post_id;
                }

                $query="SELECT * FROM users WHERE user_id='{$edit_user_id}' ";
                $select_edit_users_query= mysqli_query($connection ,$query) ;

                 while ($row =mysqli_fetch_assoc($select_edit_users_query)) 
                {
                   
                   
                    
                    $username=$row['username'];
                    $user_firstname=$row['user_firstname'];
                    $user_lastname=$row['user_lastname'];
                    $user_email=$row['user_email'];
                    $user_passward=$row['user_passward'] ;
                   // $user_image=$row['user_image'] ;
                    $mobile_number=$row['mobile_number'];
                  
                 }

              

?>




<?php


if (isset($_GET['edit_user_id'])) {
    # code...
    $edit_user_id=$_GET['edit_user_id'];
   // echo $edit_user_id;
}


if (isset($_POST['edit_user'])) {

    
                 
                    $user_firstname=$_POST['user_firstname'];
                    $user_lastname=$_POST['user_lastname'];
                    $user_email=$_POST['user_email'];
                    $user_passward=$_POST['user_passward'];
                    $mobile_number=$_POST['mobile_number'];
                    
                  

                    $username=$_POST['username'];
                
                    // $user_image=$_FILES['image']['name'];
                    // $user_image_temp=$_FILES['image']['tmp_name'];

                    // move_uploaded_file($user_image_temp, "../images/{$user_image}") ;

                    // if (empty($user_image)) {

                    //     $query ="SELECT * FROM posts WHERE post_id ='{$query_post_id}' " ;
                    //     $select_image=mysqli_query($connection,$query) ;

                    //       while ($row =mysqli_fetch_assoc($select_posts_query)) {
                    //         $user_image=$row['user_image'] ;
                    //       }
                    // }


                      $query="UPDATE users SET user_firstname='{$user_firstname}',user_lastname='{$user_lastname}',user_email='{$user_email}',username='{$username}',user_passward='{$user_passward}',mobile_number='{$mobile_number}' WHERE user_id='{$edit_user_id}' " ;

                         $edit_user_query=mysqli_query($connection,$query);




}

?>


<form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <label for="user_firstname">First Name</label>
        <input class="form-control" type="text" name="user_firstname" value="<?php echo $user_firstname ; ?>">

    </div>


    <div class="form-group">
        <label for="user_lastname">Last Name</label>
        <input class="form-control" type="text" name="user_lastname" value="<?php echo $user_firstname ; ?>">

    </div>

    <div class="form-group">
        <label for="username">User Name</label>
        <input class="form-control" type="text" name="username" value="<?php echo $username ; ?>">

<!--     </div>


        <div class="form-group">
        <label for="image">User Image</label>
        <br>
       

       <img src="../images/<?php //echo $user_image ;?>" alt="" width="100">

    </div> -->



    <!-- <div class="form-group">
        <label for="image">User Image</label>
        <input class="form-control" type="file" name="image">

    </div> -->

    <div class="form-group">
        <label for="user_email">Email</label>
        <input class="form-control" type="text" name="user_email" value="<?php echo $user_email ; ?>">

    </div>

    <div class="form-group">
        <label for="user_email">Passward</label>
        <input class="form-control" type="passward" name="user_passward" value="<?php echo $user_passward ; ?>">

    </div>


  <div class="form-group">
    <label for="mobile_number">Mobile Number</label>
    <input class="form-control" type="text" name="mobile_number" value="<?php echo $mobile_number ; ?>">

  </div>



    

    <div class="form-group">
        
        <input class="btn btn-success" type="submit" name="edit_user" value="Update User">

    </div>
    

</form>