<?php
$id=$_SESSION['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$adress = $_POST['adress'];
$city = $_POST['city'];
$state = $_POST['state'];
$pcode = $_POST['pcode'];
$about = $_POST['about'];


$query = "UPDATE Users SET Ffname='$username', Femail='$email' , Fadress='$adress', Fcity='$city', Fstate='$state', Fcode='$pcode', Fabout='$about' where UID='$id'";
mysql_query($query);

?>