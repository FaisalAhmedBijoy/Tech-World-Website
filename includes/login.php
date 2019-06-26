<?php include "db.php"; ?>
<?php session_start() ; ?>

<?php

if (isset($_POST['login'])) {


	echo $user_email=$_POST['user_email'];
	echo $user_passward=$_POST['user_passward'];

	$_SESSION['user_email']=$user_email ;

	




   $query="SELECT * FROM users WHERE user_email='{$user_email}' ";
   $select_login_query= mysqli_query($connection ,$query) ;


	while ($row=mysqli_fetch_array($select_login_query)) {
		
		$db_user_id=$row['user_id'] ;
		$db_username=$row['username'] ;
		$db_user_firstname=$row['user_firstname'] ;
		$db_user_lastname=$row['user_lastname'] ;
		$db_email=$row['user_email'] ;
		$db_user_passward=$row['user_passward'] ;

		
	}

	if ( $user_email ===$db_email && $user_passward ===$db_user_passward ) {

		echo "Login Success ";

		header("Location: ../admin");
	}

	else
	{
		echo "Passward & Email Error ";
		header("Location: ../index.php");
	
	}
}

?>