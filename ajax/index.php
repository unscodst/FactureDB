<?php
include('db.php');
if(isset($_POST['saverecord']))
{
    mysql_query("INSERT INTO student(student_name,gender,phone) VALUES('{$_POST['studentname']}','{$_POST['gender']}','{$_POST['phone']}')");
    echo 0;
    exit();
}

?>
<!DOCTYPE>
<html>
    <head>
        <title></title>
    </head>
    <script type="text/javascript" src="js/jquery.js"></script>
    <body>
        <div id="data">
            <div>
                <label>Name:</label>               
                <textarea id="studentname"></textarea>
            </div>
            <div>
                <label>Gender:</label> 
                <select name="gender" id="gender">
                    <option value="0">Male</option>
                    <option value="1">Female</option>
                </select>
            </div>
            <div>
                <label>Phone</label>
                <input type="text" name="phone" id="phone">
            </div>
            <div>
                <input type="button" value="Add" id="add">
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">
    $(function(){
        $('#add').click(function(){
            var studentname = $('#studentname').val();
            var gender = $('#gender').val();
            var phone = $('#phone').val();
            $.ajax({
                url: 'index.php',
                type: 'POST',
                async: false,
                data:{
                'saverecord': 1,
                'studentname': studentname,
                'gender': gender,
                'phone': phone
            },
                   success:function(re){
                if(re==0) {
                    alert("INSERT DATA SUCCESSFULLY");
                    $('#studentname').val('');
                    $('#gender').val('');
                    $('#phone').val('');
                }

            }
        }) 
    });
    });

</script>