<?php
DEFINE('DB_USER','root');
DEFINE('DB_HOST','localhost');
DEFINE('DB_PASSWORD','');
DEFINE('DB_NAME','logindb');
try{
$dbcon =  new mysql_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) ;
 mysqli_set_charset($dbcon,'utf8');
}
catch(Exception $e){
	//print "An exception. Message:".$e->getMessage();
print('The sytem is busy try later');
}
catch(Error $e){
	//print "An exception. Message:".$e->getMessage();
	print('The sytem is busy try later');
}

 ?>