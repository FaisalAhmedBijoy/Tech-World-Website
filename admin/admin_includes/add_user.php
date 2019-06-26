




<?php

if (isset($_POST['create_add_user'])) {

	
                 
                    $user_firstname=$_POST['user_firstname'];
                    $user_lastname=$_POST['user_lastname'];
                    $user_email=$_POST['user_email'];
                    $user_passward=$_POST['user_passward'];
                    
                   

                    // $user_image=$_FILES['image']['name'];
                    // $user_image_temp=$_FILES['image']['tmp_name'];

                    $username=$_POST['username'];
                    $mobile_number=$_POST['mobile_number'];
                    
                  
                   //  move_uploaded_file($user_image_temp, "../images/{$user_image}") ;

                    $query="INSERT INTO users (username,user_passward,user_firstname,user_lastname,user_email,mobile_number)VALUES ('{$username}' ,'{$user_passward}','{$user_firstname}','{$user_lastname}',
                    '{$user_email}','{$mobile_number}')" ;

                    $create_add_query=mysqli_query($connection,$query);

                    echo "Added User Successfully </br>";


}

?>


<form method="post" action="" enctype="multipart/form-data">

	<div class="form-group">
		<label for="user_firstname">First Name</label>
		<input class="form-control" type="text" name="user_firstname">

	</div>


	<div class="form-group">
		<label for="user_lastname">Last Name</label>
		<input class="form-control" type="text" name="user_lastname">

	</div>

	<div class="form-group">
		<label for="username">User Name</label>
		<input class="form-control" type="text" name="username">

	</div>

<!-- 
  <div class="form-group">
    <label for="image">User Image</label>
    <input class="form-control" type="file" name="image">

  </div> -->

	<div class="form-group">
		<label for="user_email">Email</label>
		<input class="form-control" type="text" name="user_email">

	</div>

	<div class="form-group">
		<label for="user_email">Passward</label>
		<input class="form-control" type="passward" name="user_passward">

	</div>

  <div class="form-group">
    <label for="mobile_number">Mobile Number</label>
    <input class="form-control" type="text" name="mobile_number">

  </div>





	

	<div class="form-group">
		
		<input class="btn btn-success" type="submit" name="create_add_user" value="Add User">

	</div>
	

</form>