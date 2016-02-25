<?php 
define('dbhost','localhost');
define('dbuser','root');
define('dbpass','34gn5jm6');
define('db','facturedb');


$conn = mysql_connect(dbhost, dbuser, dbpass);
if(!$conn) {
    die('Could not connect:' . mysql_error());
}
$db_selected = mysql_select_db(db, $conn);

if(!$db_selected) {
    die('Can\'t use' . db . ':' . mysql_error());
}

?>