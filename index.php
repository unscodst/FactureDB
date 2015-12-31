<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FactureDB</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div>
            <div>
                <label>Logo:</label>               
                <input type="text">
            </div>
            <div>
                <label>Company:</label>               
                <input type="text">
            </div>
            <div>
                <label>Country</label>
                <input type="text">
            </div>
            <div>
                <label>Description:</label>
                <textarea></textarea>
            </div>

            <div>
                <label>Materials:</label>
                <input type="text">
            </div>
            <div>
                <label>Website:</label> 
                <input type="text">
            </div>
            <div>
                <label>Email:</label> 
                <input type="text">
            </div>
            <div>
                <label>Phone Number:</label> 
                <input type="text"> 
            </div>
            <div>
            <input type="button" value="Add" id="add">
            </div>
        </div>

            <div>
                <table  border='1'>
                    <thead>
                        <tr>
                            <th colspan='5'>List of Manufacturers</th>
                        </tr>
                        <tr>
                            <th>Logo</th>
                            <th>Company</th>
                            <th>Country</th>
                            <th>Description</th>
                            <th>Materials</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>

            <script src="js/jquery-1.11.3.min.js"></script>
            <script src="js/scripts.js"></script>
            </body>
        </html>

    <script type="text/javascript">
$(function() {
    alert(0);
});

    </script>








    <?php 
    include 'includes/connection.php';

    $query = "SELECT * FROM list_of_manufacturers";

    $result = mysql_query($query);

    while ($list_of_manufacturers = mysql_fetch_array($result)) {
        echo "<div>
            <table  border='1'>
                <thead>
                    <tr>
                        <th colspan='5'>List of Manufacturers</th>
                    </tr>
                    <tr>
                        <th>Logo</th>
                        <th>Company</th>
                        <th>Country</th>
                        <th>Description</th>
                        <th>Materials</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>" . $list_of_manufacturers['Logo'] . "</td>
                        <td>" . $list_of_manufacturers['Company'] . "</td>
                        <td>" . $list_of_manufacturers['Country'] . "</td>
                        <td>" . $list_of_manufacturers['Description'] .         
            "<br>" . "<br>" .
            "<strong><label> Website: </label></strong>" . $list_of_manufacturers['Website']  . 
            "<strong><label> Email: </label></strong>" . $list_of_manufacturers['Email'] . 
            "<strong><label> Phone: </label></strong>" . $list_of_manufacturers['Phone Number'] .        
            "</td>
                        <td>" . $list_of_manufacturers['Materials'] . "</td>
                    </tr>
                </tbody>
            </table>
        </div>";
    }
    mysql_close($conn);

    ?>
