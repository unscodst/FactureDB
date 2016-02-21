<?php 
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '34gn5jm6';
$db = 'facturedb';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if($conn) {
    mysql_select_db($db,$conn);
}
?>