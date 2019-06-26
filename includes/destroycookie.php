<?php

setcookie('somecookie','',time()-100);

echo "Cookie delete";
header('Location: ../index.php');

?>