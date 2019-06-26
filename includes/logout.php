<?php session_start() ; ?>
<?php

//setcookie('somecookie','',time()-100);

$_SESSION['username']=null;
$_SESSION['passward']=null;
$_SESSION['user_role']=null;

header("Location: destroycookie.php") ;


?>