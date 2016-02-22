<?php
include('includes/connection.php');

$country = array("AF" => "Afghanistan",
                 "AX" => "Åland Islands",
                 "AL" => "Albania",
                 "DZ" => "Algeria",
                 "AS" => "American Samoa",
                 "AD" => "Andorra",
                 "AO" => "Angola",
                 "AI" => "Anguilla",
                 "AQ" => "Antarctica",
                 "AG" => "Antigua and Barbuda",
                 "AR" => "Argentina",
                 "AM" => "Armenia",
                 "AW" => "Aruba",
                 "AU" => "Australia",
                 "AT" => "Austria",
                 "AZ" => "Azerbaijan",
                 "BS" => "Bahamas",
                 "BH" => "Bahrain",
                 "BD" => "Bangladesh",
                 "BB" => "Barbados",
                 "BY" => "Belarus",
                 "BE" => "Belgium",
                 "BZ" => "Belize",
                 "BJ" => "Benin",
                 "BM" => "Bermuda",
                 "BT" => "Bhutan",
                 "BO" => "Bolivia",
                 "BA" => "Bosnia and Herzegovina",
                 "BW" => "Botswana",
                 "BV" => "Bouvet Island",
                 "BR" => "Brazil",
                 "IO" => "British Indian Ocean Territory",
                 "BN" => "Brunei Darussalam",
                 "BG" => "Bulgaria",
                 "BF" => "Burkina Faso",
                 "BI" => "Burundi",
                 "KH" => "Cambodia",
                 "CM" => "Cameroon",
                 "CA" => "Canada",
                 "CV" => "Cape Verde",
                 "KY" => "Cayman Islands",
                 "CF" => "Central African Republic",
                 "TD" => "Chad",
                 "CL" => "Chile",
                 "CN" => "China",
                 "CX" => "Christmas Island",
                 "CC" => "Cocos (Keeling) Islands",
                 "CO" => "Colombia",
                 "KM" => "Comoros",
                 "CG" => "Congo",
                 "CD" => "Congo, The Democratic Republic of The",
                 "CK" => "Cook Islands",
                 "CR" => "Costa Rica",
                 "CI" => "Cote D'ivoire",
                 "HR" => "Croatia",
                 "CU" => "Cuba",
                 "CY" => "Cyprus",
                 "CZ" => "Czech Republic",
                 "DK" => "Denmark",
                 "DJ" => "Djibouti",
                 "DM" => "Dominica",
                 "DO" => "Dominican Republic",
                 "EC" => "Ecuador",
                 "EG" => "Egypt",
                 "SV" => "El Salvador",
                 "GQ" => "Equatorial Guinea",
                 "ER" => "Eritrea",
                 "EE" => "Estonia",
                 "ET" => "Ethiopia",
                 "FK" => "Falkland Islands (Malvinas)",
                 "FO" => "Faroe Islands",
                 "FJ" => "Fiji",
                 "FI" => "Finland",
                 "FR" => "France",
                 "GF" => "French Guiana",
                 "PF" => "French Polynesia",
                 "TF" => "French Southern Territories",
                 "GA" => "Gabon",
                 "GM" => "Gambia",
                 "GE" => "Georgia",
                 "DE" => "Germany",
                 "GH" => "Ghana",
                 "GI" => "Gibraltar",
                 "GR" => "Greece",
                 "GL" => "Greenland",
                 "GD" => "Grenada",
                 "GP" => "Guadeloupe",
                 "GU" => "Guam",
                 "GT" => "Guatemala",
                 "GG" => "Guernsey",
                 "GN" => "Guinea",
                 "GW" => "Guinea-bissau",
                 "GY" => "Guyana",
                 "HT" => "Haiti",
                 "HM" => "Heard Island and Mcdonald Islands",
                 "VA" => "Holy See (Vatican City State)",
                 "HN" => "Honduras",
                 "HK" => "Hong Kong",
                 "HU" => "Hungary",
                 "IS" => "Iceland",
                 "IN" => "India",
                 "ID" => "Indonesia",
                 "IR" => "Iran, Islamic Republic of",
                 "IQ" => "Iraq",
                 "IE" => "Ireland",
                 "IM" => "Isle of Man",
                 "IL" => "Israel",
                 "IT" => "Italy",
                 "JM" => "Jamaica",
                 "JP" => "Japan",
                 "JE" => "Jersey",
                 "JO" => "Jordan",
                 "KZ" => "Kazakhstan",
                 "KE" => "Kenya",
                 "KI" => "Kiribati",
                 "KP" => "Korea, Democratic People's Republic of",
                 "KR" => "Korea, Republic of",
                 "KW" => "Kuwait",
                 "KG" => "Kyrgyzstan",
                 "LA" => "Lao People's Democratic Republic",
                 "LV" => "Latvia",
                 "LB" => "Lebanon",
                 "LS" => "Lesotho",
                 "LR" => "Liberia",
                 "LY" => "Libyan Arab Jamahiriya",
                 "LI" => "Liechtenstein",
                 "LT" => "Lithuania",
                 "LU" => "Luxembourg",
                 "MO" => "Macao",
                 "MK" => "Macedonia, The Former Yugoslav Republic of",
                 "MG" => "Madagascar",
                 "MW" => "Malawi",
                 "MY" => "Malaysia",
                 "MV" => "Maldives",
                 "ML" => "Mali",
                 "MT" => "Malta",
                 "MH" => "Marshall Islands",
                 "MQ" => "Martinique",
                 "MR" => "Mauritania",
                 "MU" => "Mauritius",
                 "YT" => "Mayotte",
                 "MX" => "Mexico",
                 "FM" => "Micronesia, Federated States of",
                 "MD" => "Moldova, Republic of",
                 "MC" => "Monaco",
                 "MN" => "Mongolia",
                 "ME" => "Montenegro",
                 "MS" => "Montserrat",
                 "MA" => "Morocco",
                 "MZ" => "Mozambique",
                 "MM" => "Myanmar",
                 "NA" => "Namibia",
                 "NR" => "Nauru",
                 "NP" => "Nepal",
                 "NL" => "Netherlands",
                 "AN" => "Netherlands Antilles",
                 "NC" => "New Caledonia",
                 "NZ" => "New Zealand",
                 "NI" => "Nicaragua",
                 "NE" => "Niger",
                 "NG" => "Nigeria",
                 "NU" => "Niue",
                 "NF" => "Norfolk Island",
                 "MP" => "Northern Mariana Islands",
                 "NO" => "Norway",
                 "OM" => "Oman",
                 "PK" => "Pakistan",
                 "PW" => "Palau",
                 "PS" => "Palestinian Territory, Occupied",
                 "PA" => "Panama",
                 "PG" => "Papua New Guinea",
                 "PY" => "Paraguay",
                 "PE" => "Peru",
                 "PH" => "Philippines",
                 "PN" => "Pitcairn",
                 "PL" => "Poland",
                 "PT" => "Portugal",
                 "PR" => "Puerto Rico",
                 "QA" => "Qatar",
                 "RE" => "Reunion",
                 "RO" => "Romania",
                 "RU" => "Russian Federation",
                 "RW" => "Rwanda",
                 "SH" => "Saint Helena",
                 "KN" => "Saint Kitts and Nevis",
                 "LC" => "Saint Lucia",
                 "PM" => "Saint Pierre and Miquelon",
                 "VC" => "Saint Vincent and The Grenadines",
                 "WS" => "Samoa",
                 "SM" => "San Marino",
                 "ST" => "Sao Tome and Principe",
                 "SA" => "Saudi Arabia",
                 "SN" => "Senegal",
                 "RS" => "Serbia",
                 "SC" => "Seychelles",
                 "SL" => "Sierra Leone",
                 "SG" => "Singapore",
                 "SK" => "Slovakia",
                 "SI" => "Slovenia",
                 "SB" => "Solomon Islands",
                 "SO" => "Somalia",
                 "ZA" => "South Africa",
                 "GS" => "South Georgia and The South Sandwich Islands",
                 "ES" => "Spain",
                 "LK" => "Sri Lanka",
                 "SD" => "Sudan",
                 "SR" => "Suriname",
                 "SJ" => "Svalbard and Jan Mayen",
                 "SZ" => "Swaziland",
                 "SE" => "Sweden",
                 "CH" => "Switzerland",
                 "SY" => "Syrian Arab Republic",
                 "TW" => "Taiwan, Province of China",
                 "TJ" => "Tajikistan",
                 "TZ" => "Tanzania, United Republic of",
                 "TH" => "Thailand",
                 "TL" => "Timor-leste",
                 "TG" => "Togo",
                 "TK" => "Tokelau",
                 "TO" => "Tonga",
                 "TT" => "Trinidad and Tobago",
                 "TN" => "Tunisia",
                 "TR" => "Turkey",
                 "TM" => "Turkmenistan",
                 "TC" => "Turks and Caicos Islands",
                 "TV" => "Tuvalu",
                 "UG" => "Uganda",
                 "UA" => "Ukraine",
                 "AE" => "United Arab Emirates",
                 "GB" => "United Kingdom",
                 "US" => "United States",
                 "UM" => "United States Minor Outlying Islands",
                 "UY" => "Uruguay",
                 "UZ" => "Uzbekistan",
                 "VU" => "Vanuatu",
                 "VE" => "Venezuela",
                 "VN" => "Viet Nam",
                 "VG" => "Virgin Islands, British",
                 "VI" => "Virgin Islands, U.S.",
                 "WF" => "Wallis and Futuna",
                 "EH" => "Western Sahara",
                 "YE" => "Yemen",
                 "ZM" => "Zambia",
                 "ZW" => "Zimbabwe");




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
        $Logo = '';
        $r = $row->Logo;
        if($r == 0) {

        }
?>
<tr>
    <td><?php echo $row-> Logo ?></td>
    <td>
        <?php echo $row-> Company ?><br><br>
        <a href="#" class="edit"><?php echo $row-> ID?>Edit</a>
        <a href="#" class="delete"><?php echo $row-> ID?>Delete</a>

    </td>
    <td><?php foreach ($country as $key => $value) { $country[$key] = $value; } ?><?php print_r($value); ?>
    </td>
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
                <select id="country">
                    <?php 
                    foreach ($country as $key => $value) {
                    ?>
                    <option value="<?=$key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value)?></option>
                    <?php
                    }
                    ?>

                </select>
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
                    $('#country').val('US');
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


