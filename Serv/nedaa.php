<?php 
	echo "<pre>";
 	print_r($_REQUEST);
 	/*print_r($_SERVER);*/
 	
 	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   echo "the method is post";
} 
elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
       echo "the method is get";

}  
else {
       echo "the method is request";

}
echo "<PRE>";

setcookie("Test",45,time()+7*24*60*60);
print_r($_COOKIE);
//to delete cookie
unset($_COOKIE['Test']);
// to use session
session_start();
$_SESSION['dept']="IT";
echo $_SESSION['dept'];




?>