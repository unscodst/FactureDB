<?php
include('includes/connection.php');
if(isset($_POST['saverecord'])) 
{
    mysql_query("INSERT INTO list_of_manufacturers(Logo,Company,Country,Description,Materials,Website,Email,Phone_Number) VALUES(
    '{$_POST['logo']}',
    '{$_POST['company']}',
    '{$_POST['country']}',
    '{$_POST['description']}',
    '{$_POST['materials']}',
    '{$_POST['website']}',
    '{$_POST['email']}',
    '{$_POST['phone']}')");
    echo 0;
    exit();
}
if(isset($_POST['show'])) {
    $sql = mysql_query("SELECT * FROM list_of_manufacturers");
    while($row = mysql_fetch_object($sql)) {
        $r = $row->Logo
?>
<tr>
    <td><?php echo $row-> Logo ?></td>
    <td>
        <?php echo $row-> Company ?><br><br>
        <a href="#" class="edit"><?php echo $row-> ID?>Edit</a>
        <a href="#" class="delete"><?php echo $row-> ID?>Delete</a>

    </td>
    <td><?php echo $row-> Country ?></td>
    <td>
        <?php echo $row-> Description?><br><br>
        <strong><label>Website:</label></strong><?php echo $row-> Website?>
        <strong><label>Email:</label></strong><?php echo $row-> Email?>
        <strong><label>Phone Number:</label></strong><?php echo $row-> Phone_Number?>
    </td>
    <td><?php echo $row-> Materials ?></td>
</tr>
<?php
                                           }
    exit();
}

?>

<!DOCTYPE>
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
        <div id="data">
            <div>
                <label>Logo:</label>               
                <input type="text" id="logo">
            </div>
            <div>
                <label>Company:</label>               
                <input type="text" id="company">
            </div>
            <div>
                <label>Country</label>
                <input type="text" id="country">
            </div>
            <div>
                <label>Description:</label>
                <textarea id="description"></textarea>
            </div>

            <div>
                <label>Materials:</label>
                <input type="text" id="materials">
            </div>
            <div>
                <label>Website:</label> 
                <input type="text" id="website">
            </div>
            <div>
                <label>Email:</label> 
                <input type="text" id="email">
            </div>
            <div>
                <label>Phone Number:</label> 
                <input type="text" id="phone"> 
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
                <tbody id="showdata">
                </tbody>
            </table>
        </div>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

<script type="text/javascript">
    $(function() {

        showdata();
        $('#add').click(function() {
            var logo = $('#logo').val();
            var company = $('#company').val();
            var country = $('#country').val();
            var description = $('#description').val();
            var materials = $('#materials').val();
            var website = $('#website').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            $.ajax({
                url : 'index.php',
                type : 'POST',
                async : false,
                data : {
                'saverecord' : 1,
                'logo' : logo,
                'company' : company,
                'country' : country,
                'description' : description,
                'materials' : materials,
                'website' : website,
                'email' : email,
                'phone' : phone 
            },
                   success:function(re) {
                if(re==0) {
                    alert("INSERT DATA SUCCESSFULLY");
                    $('#logo').val('');
                    $('#company').val('');
                    $('#country').val('');
                    $('#description').val('');
                    $('#materials').val('');
                    $('#website').val('');
                    $('#email').val('');
                    $('#phone').val('');
                    showdata();


                }

            }
        }); 
    });
    });

    function showdata() {
        $.ajax({
            url: "index.php",
            type: "post",
            async: false,
            data: {
            'show': 1
        },
               success:function(r) {
            $('#showdata').html(r);
        }
    });
    }

</script>


