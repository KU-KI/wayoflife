<?php
define('DB_SERVER', 'us-cdbr-azure-southcentral-f.cloudapp.net');
define('DB_USERNAME', 'b1f5a0707ed7d6');    // DB username
define('DB_PASSWORD', '89ac8c94');    // DB password
define('DB_DATABASE', 'wayoflife');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>
