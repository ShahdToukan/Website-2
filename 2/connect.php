<?php
    $dsn='mysql:host=localhost;dbname=website';
    $user='root';
	  $pass='';
	  $option=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTf8',
	);

try{
     $con= new PDO($dsn ,$user,$pass, $option);
     $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "YOU are connected";
   }

catch(PDOException $e){
    echo "filed to conect ". $e->getMessage();
}


