<?php 
include 'includes/connection.php';

$query = "SELECT * FROM list_of_manufacturers";

$result = mysql_query($query);

while ($list_of_manufacturers = mysql_fetch_array($result)) {
    echo "<h3>" . $list_of_manufacturers['Logo'] . "</h3>";

    echo "<div>
            <table  border='1'>
                <thead>
                    <tr>
                        <th colspan='8'>List of Manufacturers</th>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Description</th>
                        <th>Materials</th>
                        <th>Website</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>" . $list_of_manufacturers['Logo'] . "</td>
                        <td>" . $list_of_manufacturers['Company'] . "</td>
                        <td>" . $list_of_manufacturers['Country'] . "</td>
                        <td>" . $list_of_manufacturers['Description'] . "</td>
                        <td>" . $list_of_manufacturers['Materials'] . "</td>
                        <td>" . $list_of_manufacturers['Website'] . "</td>
                        <td>" . $list_of_manufacturers['Email'] . "</td>
                        <td>" . $list_of_manufacturers['Phone Number'] . "</td>
                    </tr>
                </tbody>
            </table>
        </div>";
}


?>
