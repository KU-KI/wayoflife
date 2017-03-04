<?php
session_start(); 

require 'dbconfig.php';

$fuid=$_SESSION['FBID'];
$ffname=$_POST["user_name"];
$femail=$_POST["email_address"];
$fpass=md5($_POST["password"]);

$check = mysql_query("select * from Users where Fuid='$fuid'");
$check = mysql_num_rows($check);
if (empty($check)) {	
    $query = "INSERT INTO Users (Fuid,Ffname,Femail,Fpass) VALUES ('$fuid','$ffname','$femail','$fpass' )";
    mysql_query($query);
    header("Location: /");
 } else {   		
    $query = "UPDATE Users SET Ffname='$ffname', Femail='$femail' where Fuid='$fuid'";
    mysql_query($query);
    header("Location: /");
}
?>
