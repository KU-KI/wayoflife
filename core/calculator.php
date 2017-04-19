<?php
require 'dbconfig.php';

$vaha=$_POST['vaha'];
$vyska=$_POST['vyska'];
$vyska=$vyska/100;
$vysledok=$vaha/($vyska*$vyska);
$id=$_SESSION['id'];

$query = "INSERT INTO Calculator (vaha,vyska,vysledok,uid) 
VALUES 
('$vaha','$vyska*100','$vysledok','$id' )";

mysql_query($query);
?>