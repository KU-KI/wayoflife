<?php
include 'dbconfig.php';

session_start(); 

if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['pass'])) {
	}else{
	
	$email=$_POST['email'];
	$password=md5($_POST['pass']);

	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);

            $check = mysql_query("select * from Users where Fpass='$password' AND Femail='$email'");
            $check = mysql_num_rows($check);
            
		if (empty($check)) {
                   header("location: /");	
		} else {
                    $check = mysql_query("select Ffname from Users where Femail='$email'");
                    $row = mysql_fetch_array($check);
                    $username = $row['Ffname'];
                    
                    $_SESSION['FULLNAME']=$username; 
                    header("location: /dashboard.php?f=1");
		}
	}	
}
?>