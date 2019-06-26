<?php



$db['db_host']='localhost' ;
$db['db_user']='root';
$db['db_passward']='';
$db['db_name']='tech world' ;

foreach ($db as $key => $value) {
    
    define(strtoupper($key ) ,$value) ;
}

$connection= mysqli_connect(DB_HOST,DB_USER,DB_PASSWARD,DB_NAME) ;
if ($connection)
{
  

}
else
{
    echo "Someting Problem Occur </br>" ;
    echo mysqli_error($connection);
}

?>