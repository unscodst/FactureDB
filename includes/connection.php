<?php 
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '34gn5jm6';
$db_name = 'facturedb';


$conn = new mysqli($db_host, $db_user, $db_pass);

if (mysqli_connect_errno()) {
    printf("Failed to connect: %s\n", mysqli_connect_error());
    exit();
}

$db_selected = mysqli_select_db($db_name, $conn);

if(!$db_selected) {
    die('Can\'t use' . db . ':' . mysqli_error());
}

public function addManufacturer() {
    $query = mysql_query("INSERT INTO list_of_manufacturers(Logo,Company,Country,Description,Materials,Website,Email,Phone_Number) VALUES(
    '{$_POST['logo']}',
    '{$_POST['company']}',
    '{$_POST['country']}',
    '{$_POST['description']}',
    '{$_POST['materials']}',
    '{$_POST['website']}',
    '{$_POST['email']}',
    '{$_POST['phone']}')");
    $result = $this->mysql_query($query);
    $result;
}

public function showManufacturers() {
    $query = mysql_query("SELECT * FROM list_of_manufacturers");
    $result = $this->mysql_query($query);

    $no_of_rows = $result->num_rows;
    if($no_of_rows > 0) {
        $response = [];
        while($row = $result->fetch_array(MYSQL_ASSOC)) {
            array_push($respone, $row);
        }
        return $response;
    }
    else {
        return "";
    }
}


?>