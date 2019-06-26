<?php
if (isset($_GET['submitbutton']) ) {



    if (isset($_GET['logincheck'])) {
       
        echo "Remember me  cookie set ";

        $name="somecookie";
        $value=100;
        $expiration=time()+(60*60*24*7) ;
        setcookie($name,$value,$expiration);

    }
    
        $useremail="faisal.cse16.kuet@gmail.com";
        $userpassword="01623155000";

        $inputemail=$_GET['useremail'];
        $inputpassword=$_GET['userpassword'];

        if ($userpassword ==$inputpassword and $useremail == $inputemail) {
            
            echo "Passward Match";
            echo $inputemail;
            echo $inputpassword;
            header("Location: homepage.php");

        }
        else{
            echo "Passward not match";
            header("Location : index.php");
        }



}
?>
