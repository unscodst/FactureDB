
/* Creates global functions to supress JSLint errors */
/*global $, document, countryString:true, promptMessage  */

$(document).ready(function () {
    $("#button").click(function () {
        /* Creates a variable for all user input elements and appends their value by element id */
        var logo, company, country, description, materials, website, email, phone;
        logo = $('#logo').val();
        company = $('#company').val();
        country = $('#country').val();
        description = $('#description').val();
        materials = $('#materials').val();
        website = $('#website').val();
        email = $('#email').val();
        phone = $('#phone').val();
        /* Switch statement to turn the Country list value into a string to append to the table */
        switch (country) {
        case "AF":
            countryString = "Afghanistan";
            break;
        case "AX":
            countryString = "Åland Islands";
            break;
        case "AL":
            countryString = "Albania";
            break;
        case "DZ":
            countryString = "Algeria";
            break;
        case "AS":
            countryString = "American Samoa";
            break;
        case "AD":
            countryString = "Andorra";
            break;
        case "AO":
            countryString = "Angola";
            break;
        case "AI":
            countryString = "Anguilla";
            break;
        case "AQ":
            countryString = "Antarctica";
            break;
        case "AG":
            countryString = "Antigua and Barbuda";
            break;
        case "AR":
            countryString = "Argentina";
            break;
        case "AM":
            countryString = "Armenia";
            break;
        case "AW":
            countryString = "Aruba";
            break;
        case "AU":
            countryString = "Australia";
            break;
        case "AT":
            countryString = "Austria";
            break;
        case "AZ":
            countryString = "Azerbaijan";
            break;
        case "BS":
            countryString = "Bahamas";
            break;
        case "BH":
            countryString = "Bahrain";
            break;
        case "BD":
            countryString = "Bangladesh";
            break;
        case "BB":
            countryString = "Barbados";
            break;
        case "BY":
            countryString = "Belarus";
            break;
        case "BE":
            countryString = "Belgium";
            break;
        case "BZ":
            countryString = "Belize";
            break;
        case "BJ":
            countryString = "Benin";
            break;
        case "BM":
            countryString = "Bermuda";
            break;
        case "BT":
            countryString = "Bhutan";
            break;
        case "BO":
            countryString = "Bolivia, Plurinational State of";
            break;
        case "BQ":
            countryString = "Bonaire, Sint Eustatius and Saba";
            break;
        case "BA":
            countryString = "Bosnia and Herzegovina";
            break;
        case "BW":
            countryString = "Botswana";
            break;
        case "BV":
            countryString = "Bouvet Island";
            break;
        case "BR":
            countryString = "Brazil";
            break;
        case "IO":
            countryString = "British Indian Ocean Territory";
            break;
        case "BN":
            countryString = "Brunei Darussalam";
            break;
        case "BG":
            countryString = "Bulgaria";
            break;
        case "BF":
            countryString = "Burkina Faso";
            break;
        case "BI":
            countryString = "Burundi";
            break;
        case "KH":
            countryString = "Cambodia";
            break;
        case "CM":
            countryString = "Cameroon";
            break;
        case "CA":
            countryString = "Canada";
            break;
        case "CV":
            countryString = "Cape Verde";
            break;
        case "KY":
            countryString = "Cayman Islands";
            break;
        case "CF":
            countryString = "Central African Republic";
            break;
        case "TD":
            countryString = "Chad";
            break;
        case "CL":
            countryString = "Chile";
            break;
        case "CN":
            countryString = "China";
            break;
        case "CX":
            countryString = "Christmas Island";
            break;
        case "CC":
            countryString = "Cocos (Keeling) Islands";
            break;
        case "CO":
            countryString = "Colombia";
            break;
        case "KM":
            countryString = "Comoros";
            break;
        case "CG":
            countryString = "Congo";
            break;
        case "CD":
            countryString = "Congo, the Democratic Republic of the";
            break;
        case "CK":
            countryString = "Cook Islands";
            break;
        case "CR":
            countryString = "Costa Rica";
            break;
        case "CI":
            countryString = "Côte d'Ivoire";
            break;
        case "HR":
            countryString = "Croatia";
            break;
        case "CU":
            countryString = "Cuba";
            break;
        case "CW":
            countryString = "Curaçao";
            break;
        case "CY":
            countryString = "Cyprus";
            break;
        case "CZ":
            countryString = "Czech Republic";
            break;
        case "DK":
            countryString = "Denmark";
            break;
        case "DJ":
            countryString = "Djibouti";
            break;
        case "DM":
            countryString = "Dominica";
            break;
        case "DO":
            countryString = "Dominican Republic";
            break;
        case "EC":
            countryString = "Ecuador";
            break;
        case "EG":
            countryString = "Egypt";
            break;
        case "SV":
            countryString = "El Salvador";
            break;
        case "GQ":
            countryString = "Equatorial Guinea";
            break;
        case "ER":
            countryString = "Eritrea";
            break;
        case "EE":
            countryString = "Estonia";
            break;
        case "ET":
            countryString = "Ethiopia";
            break;
        case "FK":
            countryString = "Falkland Islands (Malvinas)";
            break;
        case "FO":
            countryString = "Faroe Islands";
            break;
        case "FJ":
            countryString = "Fiji";
            break;
        case "FI":
            countryString = "Finland";
            break;
        case "FR":
            countryString = "France";
            break;
        case "GF":
            countryString = "French Guiana";
            break;
        case "PF":
            countryString = "French Polynesia";
            break;
        case "TF":
            countryString = "French Southern Territories";
            break;
        case "GA":
            countryString = "Gabon";
            break;
        case "GM":
            countryString = "Gambia";
            break;
        case "GE":
            countryString = "Georgia";
            break;
        case "DE":
            countryString = "Germany";
            break;
        case "GH":
            countryString = "Ghana";
            break;
        case "GI":
            countryString = "Gibraltar";
            break;
        case "GR":
            countryString = "Greece";
            break;
        case "GL":
            countryString = "Greenland";
            break;
        case "GD":
            countryString = "Grenada";
            break;
        case "GP":
            countryString = "Guadeloupe";
            break;
        case "GU":
            countryString = "Guam";
            break;
        case "GT":
            countryString = "Guatemala";
            break;
        case "GG":
            countryString = "Guernsey";
            break;
        case "GN":
            countryString = "Guinea";
            break;
        case "GW":
            countryString = "Guinea-Bissau";
            break;
        case "GY":
            countryString = "Guyana";
            break;
        case "HT":
            countryString = "Haiti";
            break;
        case "HM":
            countryString = "Heard Island and McDonald Islands";
            break;
        case "VA":
            countryString = "Holy See (Vatican City State)";
            break;
        case "HN":
            countryString = "Honduras";
            break;
        case "HK":
            countryString = "Hong Kong";
            break;
        case "HU":
            countryString = "Hungary";
            break;
        case "IS":
            countryString = "Iceland";
            break;
        case "IN":
            countryString = "India";
            break;
        case "ID":
            countryString = "Indonesia";
            break;
        case "IR":
            countryString = "Iran, Islamic Republic of";
            break;
        case "IQ":
            countryString = "Iraq";
            break;
        case "IE":
            countryString = "Ireland";
            break;
        case "IM":
            countryString = "Isle of Man";
            break;
        case "IL":
            countryString = "Israel";
            break;
        case "IT":
            countryString = "Italy";
            break;
        case "JM":
            countryString = "Jamaica";
            break;
        case "JP":
            countryString = "Japan";
            break;
        case "JE":
            countryString = "Jersey";
            break;
        case "JO":
            countryString = "Jordan";
            break;
        case "KZ":
            countryString = "Kazakhstan";
            break;
        case "KE":
            countryString = "Kenya";
            break;
        case "KI":
            countryString = "Kiribati";
            break;
        case "KP":
            countryString = "Korea, Democratic People's Republic of";
            break;
        case "KR":
            countryString = "Korea, Republic of";
            break;
        case "KW":
            countryString = "Kuwait";
            break;
        case "KG":
            countryString = "Kyrgyzstan";
            break;
        case "LA":
            countryString = "Lao People's Democratic Republic";
            break;
        case "LV":
            countryString = "Latvia";
            break;
        case "LB":
            countryString = "Lebanon";
            break;
        case "LS":
            countryString = "Lesotho";
            break;
        case "LR":
            countryString = "Liberia";
            break;
        case "LY":
            countryString = "Libya";
            break;
        case "LI":
            countryString = "Liechtenstein";
            break;
        case "LT":
            countryString = "Lithuania";
            break;
        case "LU":
            countryString = "Luxembourg";
            break;
        case "MO":
            countryString = "Macao";
            break;
        case "MK":
            countryString = "Macedonia, the former Yugoslav Republic of";
            break;
        case "MG":
            countryString = "Madagascar";
            break;
        case "MW":
            countryString = "Malawi";
            break;
        case "MY":
            countryString = "Malaysia";
            break;
        case "MV":
            countryString = "Maldives";
            break;
        case "ML":
            countryString = "Mali";
            break;
        case "MT":
            countryString = "Malta";
            break;
        case "MH":
            countryString = "Marshall Islands";
            break;
        case "MQ":
            countryString = "Martinique";
            break;
        case "MR":
            countryString = "Mauritania";
            break;
        case "MU":
            countryString = "Mauritius";
            break;
        case "YT":
            countryString = "Mayotte";
            break;
        case "MX":
            countryString = "Mexico";
            break;
        case "FM":
            countryString = "Micronesia, Federated States of";
            break;
        case "MD":
            countryString = "Moldova, Republic of";
            break;
        case "MC":
            countryString = "Monaco";
            break;
        case "MN":
            countryString = "Mongolia";
            break;
        case "ME":
            countryString = "Montenegro";
            break;
        case "MS":
            countryString = "Montserrat";
            break;
        case "MA":
            countryString = "Morocco";
            break;
        case "MZ":
            countryString = "Mozambique";
            break;
        case "MM":
            countryString = "Myanmar";
            break;
        case "NA":
            countryString = "Namibia";
            break;
        case "NR":
            countryString = "Nauru";
            break;
        case "NP":
            countryString = "Nepal";
            break;
        case "NL":
            countryString = "Netherlands";
            break;
        case "NC":
            countryString = "New Caledonia";
            break;
        case "NZ":
            countryString = "New Zealand";
            break;
        case "NI":
            countryString = "Nicaragua";
            break;
        case "NE":
            countryString = "Niger";
            break;
        case "NG":
            countryString = "Nigeria";
            break;
        case "NU":
            countryString = "Niue";
            break;
        case "NF":
            countryString = "Norfolk Island";
            break;
        case "MP":
            countryString = "Northern Mariana Islands";
            break;
        case "NO":
            countryString = "Norway";
            break;
        case "OM":
            countryString = "Oman";
            break;
        case "PK":
            countryString = "Pakistan";
            break;
        case "PW":
            countryString = "Palau";
            break;
        case "PS":
            countryString = "Palestinian Territory, Occupied";
            break;
        case "PA":
            countryString = "Panama";
            break;
        case "PG":
            countryString = "Papua New Guinea";
            break;
        case "PY":
            countryString = "Paraguay";
            break;
        case "PE":
            countryString = "Peru";
            break;
        case "PH":
            countryString = "Philippines";
            break;
        case "PN":
            countryString = "Pitcairn";
            break;
        case "PL":
            countryString = "Poland";
            break;
        case "PT":
            countryString = "Portugal";
            break;
        case "PR":
            countryString = "Puerto Rico";
            break;
        case "QA":
            countryString = "Qatar";
            break;
        case "RE":
            countryString = "Réunion";
            break;
        case "RO":
            countryString = "Romania";
            break;
        case "RU":
            countryString = "Russian Federation";
            break;
        case "RW":
            countryString = "Rwanda";
            break;
        case "BL":
            countryString = "Saint Barthélemy";
            break;
        case "SH":
            countryString = "Saint Helena, Ascension and Tristan da Cunha";
            break;
        case "KN":
            countryString = "Saint Kitts and Nevis";
            break;
        case "LC":
            countryString = "Saint Lucia";
            break;
        case "MF":
            countryString = "Saint Martin (French part)";
            break;
        case "PM":
            countryString = "Saint Pierre and Miquelon";
            break;
        case "VC":
            countryString = "Saint Vincent and the Grenadines";
            break;
        case "WS":
            countryString = "Samoa";
            break;
        case "SM":
            countryString = "San Marino";
            break;
        case "ST":
            countryString = "Sao Tome and Principe";
            break;
        case "SA":
            countryString = "Saudi Arabia";
            break;
        case "SN":
            countryString = "Senegal";
            break;
        case "RS":
            countryString = "Serbia";
            break;
        case "SC":
            countryString = "Seychelles";
            break;
        case "SL":
            countryString = "Sierra Leone";
            break;
        case "SG":
            countryString = "Singapore";
            break;
        case "SX":
            countryString = "Sint Maarten (Dutch part)";
            break;
        case "SK":
            countryString = "Slovakia";
            break;
        case "SI":
            countryString = "Slovenia";
            break;
        case "SB":
            countryString = "Solomon Islands";
            break;
        case "SO":
            countryString = "Somalia";
            break;
        case "ZA":
            countryString = "South Africa";
            break;
        case "GS":
            countryString = "South Georgia and the South Sandwich Islands";
            break;
        case "SS":
            countryString = "South Sudan";
            break;
        case "ES":
            countryString = "Spain";
            break;
        case "LK":
            countryString = "Sri Lanka";
            break;
        case "SD":
            countryString = "Sudan";
            break;
        case "SR":
            countryString = "Suriname";
            break;
        case "SJ":
            countryString = "Svalbard and Jan Mayen";
            break;
        case "SZ":
            countryString = "Swaziland";
            break;
        case "SE":
            countryString = "Sweden";
            break;
        case "CH":
            countryString = "Switzerland";
            break;
        case "SY":
            countryString = "Syrian Arab Republic";
            break;
        case "TW":
            countryString = "Taiwan, Province of China";
            break;
        case "TJ":
            countryString = "Tajikistan";
            break;
        case "TZ":
            countryString = "Tanzania, United Republic of";
            break;
        case "TH":
            countryString = "Thailand";
            break;
        case "TL":
            countryString = "Timor-Leste";
            break;
        case "TG":
            countryString = "Togo";
            break;
        case "TK":
            countryString = "Tokelau";
            break;
        case "TO":
            countryString = "Tonga";
            break;
        case "TT":
            countryString = "Trinidad and Tobago";
            break;
        case "TN":
            countryString = "Tunisia";
            break;
        case "TR":
            countryString = "Turkey";
            break;
        case "TM":
            countryString = "Turkmenistan";
            break;
        case "TC":
            countryString = "Turks and Caicos Islands";
            break;
        case "TV":
            countryString = "Tuvalu";
            break;
        case "UG":
            countryString = "Uganda";
            break;
        case "UA":
            countryString = "Ukraine";
            break;
        case "AE":
            countryString = "United Arab Emirates";
            break;
        case "GB":
            countryString = "United Kingdom";
            break;
        case "US":
            countryString = "United States";
            break;
        case "UM":
            countryString = "United States Minor Outlying Islands";
            break;
        case "UY":
            countryString = "Uruguay";
            break;
        case "UZ":
            countryString = "Uzbekistan";
            break;
        case "VU":
            countryString = "Vanuatu";
            break;
        case "VE":
            countryString = "Venezuela, Bolivarian Republic of";
            break;
        case "VN":
            countryString = "Viet Nam";
            break;
        case "VG":
            countryString = "Virgin Islands, British";
            break;
        case "VI":
            countryString = "Virgin Islands, U.S.";
            break;
        case "WF":
            countryString = "Wallis and Futuna";
            break;
        case "EH":
            countryString = "Western Sahara";
            break;
        case "YE":
            countryString = "Yemen";
            break;
        case "ZM":
            countryString = "Zambia";
            break;
        case "ZW":
            countryString = "Zimbabwe";
            break;
        }
        /* Creates and formats a new row with the users input. Rows are created by concatenating previously defined variables */
        $('#myTable tr:last').after('<tr><td class="mdl-data-table__cell--non-numeric addCell"> <img class="logoimg" src="' + logo + '"></td><td class="mdl-data-table__cell--non-numeric addCell">' + company + '</td><td class="mdl-data-table__cell--non-numeric addCell">' + countryString + '</td><td class="mdl-data-table__cell--non-numeric addCell">' + description + '</td><td class="mdl-data-table__cell--non-numeric addCell">' + materials + '</td><td class="mdl-data-table__cell--non-numeric addCell">' + website + '</td><td class="mdl-data-table__cell--non-numeric addCell">' + email + '</td><td class="mdl-data-table__cell--non-numeric addCell">' + phone + '</td></tr>');

    });

});

/* Gives and error message in a lable next to the phone input if the user enters any character other than a number. The message is colored red. */
function validateInput() {
    "use strict";
    var number = $('#phone').val();
    if (isNaN(number)) {
        /* The message that will be displayed is the first argument, the location is the second agrument which in this case is any element with the id of phonePrompt, the third argument defines the color */
        promptMessage("Numbers Only", "phonePrompt", "red");
        return false;
    }
    /* If the phone input is cleared of the character that created the error then the error will go away */
    promptMessage("", "phonePrompt", "");
    return true;
}
/* Defines the arguments for the message, location and color. These arguments are passed onto the validateInput function */
function promptMessage(message, promptLocation, color) {
    "use strict";
    document.getElementById(promptLocation).innerHTML = message;
    document.getElementById(promptLocation).style.color = color;

}










