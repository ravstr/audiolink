<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Adoption</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<script>
<!--
function pop(url)
{
 window.open(url,'profile','width=300,height=350,scrollbars,resizable');
}

// date
var modDate = new Date(document.lastModified)
  var modYear = modDate.getYear()
  if(modYear<1000) modYear+=1900



//-->
</script>
<style type="text/css">
<!--

.maincolor { background: #BA9BB8}

.font1{font-family: Arial, Geneva, Helvetica, sans-serif; font-size: 12px;}

td {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: normal;
	font-style: normal;
	font-weight: normal;
	color: #000000;
}

-->
</style>
<meta name="Microsoft Theme" content="color-swap 1111, default">
</head>

<body topmargin="0" leftmargin="0" rightmargin="0" marginwidth="0" marginheight="0">

<table BORDER="0" CELLPADDING="0" CELLSPACING="0" STYLE="border-collapse: collapse" WIDTH="1000" bordercolorlight="#000000">
  <?PHP

  	include 'Topinclude.php';

  ?>

  <tr>

  <?PHP

	  	include 'sideinclude.php';

  ?>

    <td valign="top" CLASS="maincolor" width="698" style="background-color: #FFFFFF">

  	<?PHP
  	   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[afirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    ?>
<div align="center">
  <center>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">
	   <tr>
	     <td width="100%"><br><br>
	     <form method="POST" action="agent_search_musician_process.php">
	 <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" align="left">

	<tr align="left" valign="top">
	            <td width="216" align="right" height="12"><b><font color="#000080">Skill Level:</font></b></td>
	            <td width="454" height="12">
	              <select name="Skill">

	                <option value="Just Begun" >Just Begun</option>

	                <option value="Manage Basics" >Manage Basics</option>

	                <option value="Fairly Good" >Fairly Good</option>

	                <option value="Very Good" >Very Good</option>

	                <option value="Virtouso" >Virtouso</option>

	                <option value="N/A" >N/A</option>

	              </select>

	            </td>

	          </tr>


		<tr align="left" valign="top">
	            <td width="216" align="right" height="12"><b><font color="#000080">Average age:</font></b></td>
	            <td width="454" height="12">
	               <select name="age">

                <option value="17-20">17-20</option>

                <option value="20-25">20-25</option>

                <option value="25-30">25-30</option>

                <option value="30-35">30-35</option>

                <option value="35-40">35-40</option>

                <option value="45-50">45-50</option>

                <option value="50-55">50-55</option>
                 
                <option value="50 and over">50 and over</option>
                 
              </select>

	            </td>

	          </tr>

	          <tr align="left" valign="top">
	            <td width="216" align="right" height="12"><b><font color="#000080">Genre:</font></b></td>
	            <td width="454" height="12">
	              <select name="Genre">

	                <option value="A Capella" >A Capella</option>

	                <option value="Americana Music" >Americana Music</option>

	                <option value="Barbershop" >Barbershop</option>

	                <option value="Bluegrass" >Bluegrass</option>

	                <option value="Blues" >Blues</option>

	                <option value="Brass Band" >Brass Band</option>

	                <option value="Celtic/Irish" >Celtic/Irish</option>

	                <option value="Chansons" >Chansons</option>

	                <option value="Children" >Children</option>

	                <option value="Classic" >Classic</option>

	                <option value="Country" >Country</option>

	                <option value="Dance" >Dance</option>

	                <option value="Electronic" >Electronic</option>

	                <option value="Folk" >Folk</option>

	                <option value="Funk" >Funk</option>

	                <option value="Gospel" >Gospel</option>

	                <option value="Gothic" >Gothic</option>

	                <option value="Hard Rock" >Hard Rock</option>

	                <option value="Heavy Metal" >Heavy Metal</option>

	                <option value="Hispanic" >Hispanic</option>

	                <option value="Industrial" >Industrial</option>

	                <option value="Instrumental" >Instrumental</option>

	                <option value="Jazz" >Jazz</option>

	                <option value="Merengue" >Merengue</option>

	                <option value="N/A" >N/A</option>

	                <option value="New Age" >New Age</option>

	                <option value="Oldies" >Oldies</option>

	                <option value="Oldies Rock" >Oldies Rock</option>

	                <option value="Other" >Other</option>

	                <option value="Pop" >Pop</option>

	                <option value="Punk" >Punk</option>

	                <option value="R&B" >R&B</option>

	                <option value="Reggae" >Reggae</option>

	                <option value="Rock" >Rock</option>

	                <option value="Rockabilly" >Rockabilly</option>

	                <option value="Romantic Ballads" >Romantic Ballads</option>

	                <option value="Salsa" >Salsa</option>

	                <option value="Samba" >Samba</option>

	                <option value="Ska" >Ska</option>

	                <option value="Soul" >Soul</option>

	                <option value="Techno" >Techno</option>

	                <option value="Trash" >Trash</option>

	                <option value="Zydeco" >Zydeco</option>

	              </select>

	            </td>

	          </tr>

	          <tr align="left" valign="top">
	            <td width="216" align="right" height="12"><b><font color="#000080">Years active:</font></b></td>
	            <td width="454" height="12">
	            <select name="YearsActive">

	                <option value="0">0</option>

	                <option value="1">1</option>

	                <option value="2">2</option>

	                <option value="3">3</option>

	                <option value="4">4</option>

	                <option value="5">5</option>

	                <option value="6">6</option>

	                <option value="7">7</option>

	                <option value="8">8</option>

	                <option value="9">9</option>

	                <option value="10">10</option>

	                <option value="11">11</option>

	                <option value="12">12</option>

	                <option value="13">13</option>

	                <option value="14">14</option>

	                <option value="15">15</option>

	                <option value="16">16</option>

	                <option value="17">17</option>

	                <option value="18">18</option>

	                <option value="19">19</option>

	                <option value="20">20 or more</option>
	              </select>

	            </td>

	          </tr>

	          <tr align="left" valign="top">
	            <td width="216" align="right" height="12"><b><font color="#000080">Engagement Level:</font></b></td>
	            <td width="454" height="12">
	              <select name="EngLevel">

	                <option value="Amateur">Amateur</option>

	                <option value="Semi-pro">Semi-pro</option>

	                <option value="Professional">Professional</option>

	                <option value="N/A" >N/A</option>

	              </select>

	            </td>

	          </tr>

	 <tr>
	            <td width="216" align="right" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
		            <font color="#000080"><b>*Country:</b></font></td>
	            <td width="454" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">


		              <font color="#000080">
		              <SELECT NAME="billingcountry">

		              <option value="United States">United States</option>
		              <option value="Australia">Australia</option>
		              <option value="Canada">Canada</option>
		              <option value="France">France</option>
		              <option value="Germany">Germany</option>
		              <option value="Italy">Italy</option>
		              <option value="Japan">Japan</option>
		              <option value="Republic of Korea">Korea, Republic of</option>
		              <option value="Sweden">Sweden</option>
		              <option value="United Kingdom">United Kingdom</option>
		              <option value="AF">Afghanistan</option>
		              <option value="AL">Albania</option>
		              <option value="DZ">Algeria</option>
		              <option value="AS">American Samoa</option>
		              <option value="AD">Andorra</option>
		              <option value="Angola">Angola</option>
		              <option value="AI">Anguilla</option>
		              <option value="AQ">Antartica</option>
		              <option value="AG">Antigua and Barbu</option>
		              <option value="AR">Argentina</option>
		              <option value="AM">Armenia</option>
		              <option value="AW">Aruba</option>
		              <option value="AT">Austria</option>
		              <option value="AZ">Azerbaijan</option>
		              <option value="BS">Bahamas</option>
		              <option value="BH">Bahrain</option>
		              <option value="BD">Bangladesh</option>
		              <option value="BB">Barbados</option>
		              <option value="BY">Belarus</option>
		              <option value="BE">Belgium</option>
		              <option value="BZ">Belize</option>
		              <option value="BJ">Benin</option>
		              <option value="BM">Bermuda</option>
		              <option value="BT">Bhutan</option>
		              <option value="BO">Bolivia</option>
		              <option value="BA">Bosnia-Herzegovin</option>
		              <option value="BW">Botswana</option>
		              <option value="BV">Bouvet Island</option>
		              <option value="BR">Brazil</option>
		              <option value="IO">British Indian Oc</option>
		              <option value="BN">Brunei Darussala</option>
		              <option value="BG">Bulgaria</option>
		              <option value="BF">Burkina Faso</option>
		              <option value="BI">Burundi</option>
		              <option value="KH">Cambodia</option>
		              <option value="CM">Cameroon</option>
		              <option value="CV">Cape Verde</option>
		              <option value="KY">Cayman Islands</option>
		              <option value="CF">Central African R</option>
		              <option value="TD">Chad</option>
		              <option value="CL">Chile</option>
		              <option value="CN">China</option>
		              <option value="CX">Christmas Island</option>
		              <option value="CC">Cocos (Keeling)</option>
		              <option value="CO">Colombia</option>
		              <option value="KM">Comoros</option>
		              <option value="CG">Congo</option>
		              <option value="CK">Cook Islands</option>
		              <option value="CR">Costa Rica</option>
		              <option value="CI">Cote D'Ivoire</option>
		              <option value="HR">Croatia</option>
		              <option value="CY">Cyprus</option>
		              <option value="CZ">Czech Republic</option>
		              <option value="DK">Denmark</option>
		              <option value="DJ">Djibouti</option>
		              <option value="DM">Dominica</option>
		              <option value="DO">Dominican Republ</option>
		              <option value="TP">East Timor</option>
		              <option value="EC">Ecuador</option>
		              <option value="EG">Egypt</option>
		              <option value="SV">El Salvador</option>
		              <option value="GQ">Equatorial Guin</option>
		              <option value="EE">Estonia</option>
		              <option value="ET">Ethiopia</option>
		              <option value="FO">Faeroe Islands</option>
		              <option value="FK">Falkland Islands</option>
		              <option value="FJ">Fiji</option>
		              <option value="FI">Finland</option>
		              <option value="GF">French Guiana</option>
		              <option value="PF">French Polynesia</option>
		              <option value="TF">French Southern</option>
		              <option value="GA">Gabon</option>
		              <option value="GM">Gambia</option>
		              <option value="GE">Georgia</option>
		              <option value="GH">Ghana</option>
		              <option value="GI">Gibraltar</option>
		              <option value="GR">Greece</option>
		              <option value="GL">Greenland</option>
		              <option value="GD">Grenada</option>
		              <option value="GP">Guadeloupe</option>
		              <option value="GU">Guam</option>
		              <option value="GT">Guatemala</option>
		              <option value="GG">Guernsey, C.I.</option>
		              <option value="GN">Guinea</option>
		              <option value="GW">Guinea-Bissau</option>
		              <option value="GY">Guyana</option>
		              <option value="HT">Haiti</option>
		              <option value="HM">Heard and McDonal</option>
		              <option value="HN">Honduras</option>
		              <option value="HK">Hong Kong</option>
		              <option value="HU">Hungary</option>
		              <option value="IS">Iceland</option>
		              <option value="IN">India</option>
		              <option value="ID">Indonesia</option>
		              <option value="IE">Ireland</option>
		              <option value="IM">Isle of Man</option>
		              <option value="IL">Israel</option>
		              <option value="JM">Jamaica</option>
		              <option value="JE">Jersey, C.I.</option>
		              <option value="JO">Jordan</option>
		              <option value="KZ">Kazakhstan</option>
		              <option value="KE">Kenya</option>
		              <option value="KI">Kiribati</option>
		              <option value="KW">Kuwait</option>
		              <option value="KG">Kyrgyzstan</option>
		              <option value="LA">Lao Peoples Democ</option>
		              <option value="LV">Latvia</option>
		              <option value="LB">Lebanon</option>
		              <option value="LS">Lesotho</option>
		              <option value="LR">Liberia</option>
		              <option value="LI">Liechtenstein</option>
		              <option value="LT">Lithuania</option>
		              <option value="LU">Luxemborg</option>
		              <option value="MO">Macau</option>
		              <option value="MG">Madagascar</option>
		              <option value="MW">Malawi</option>
		              <option value="MY">Malaysia</option>
		              <option value="MV">Maldives</option>
		              <option value="ML">Mali</option>
		              <option value="MT">Malta</option>
		              <option value="MH">Marshall Islands</option>
		              <option value="MQ">Martinique</option>
		              <option value="MR">Mauritania</option>
		              <option value="MU">Mauritius</option>
		              <option value="MX">Mexico</option>
		              <option value="FM">Micronesia</option>
		              <option value="MD">Moldova</option>
		              <option value="MC">Monaco</option>
		              <option value="MN">Mongolia</option>
		              <option value="MS">Montserrat</option>
		              <option value="MA">Morocco</option>
		              <option value="MZ">Mozambique</option>
		              <option value="MM">Myanmar</option>
		              <option value="NA">Namibia</option>
		              <option value="NR">Nauru</option>
		              <option value="NP">Nepal</option>
		              <option value="AN">Netherland Antil</option>
		              <option value="NL">Netherlands</option>
		              <option value="NT">Neutral Zone</option>
		              <option value="NC">New Caledonia</option>
		              <option value="NZ">New Zealand</option>
		              <option value="NI">Nicaragua</option>
		              <option value="NE">Niger</option>
		              <option value="NG">Nigeria</option>
		              <option value="NU">Niue</option>
		              <option value="NF">Norfolk Island</option>
		              <option value="MP">Northern Mariana</option>
		              <option value="NO">Norway</option>
		              <option value="OM">Oman</option>
		              <option value="PK">Pakistan</option>
		              <option value="PW">Palau</option>
		              <option value="PA">Panama</option>
		              <option value="PZ">Panama Canal Zo</option>
		              <option value="PG">Papua New Guine</option>
		              <option value="PY">Paraguay</option>
		              <option value="PE">Peru</option>
		              <option value="PH">Philippines</option>
		              <option value="PN">Pitcairn</option>
		              <option value="PL">Poland</option>
		              <option value="PT">Portugal</option>
		              <option value="PR">Puerto Rico</option>
		              <option value="QA">Qatar</option>
		              <option value="RE">Reunion</option>
		              <option value="RO">Romania</option>
		              <option value="RU">Russian Federat</option>
		              <option value="RW">Rwanda</option>
		              <option value="KN">Saint Kitts and</option>
		              <option value="LC">Saint Lucia</option>
		              <option value="WS">Samoa</option>
		              <option value="SM">San Marino</option>
		              <option value="ST">Sao Tome and Pri</option>
		              <option value="SA">Saudi Arabia</option>
		              <option value="SN">Senegal</option>
		              <option value="SC">Seychelles</option>
		              <option value="SL">Sierra Leone</option>
		              <option value="SG">Singapore</option>
		              <option value="SK">Slovakia</option>
		              <option value="SI">Slovenia</option>
		              <option value="SB">Solomon Islands</option>
		              <option value="SO">Somalia</option>
		              <option value="ZA">South Africa</option>
		              <option value="ES">Spain</option>
		              <option value="LK">Sri Lanka</option>
		              <option value="SH">St. Helena</option>
		              <option value="PM">St. Pierre and</option>
		              <option value="VC">St. Vincent and</option>
		              <option value="SD">Sudan</option>
		              <option value="SR">Suriname</option>
		              <option value="SJ">Svalbard and Jan</option>
		              <option value="SZ">Swaziland</option>
		              <option value="CH">Switzerland</option>
		              <option value="SY">Syria</option>
		              <option value="TW">Taiwan</option>
		              <option value="TJ">Tajikistan</option>
		              <option value="TZ">Tanzania, United</option>
		              <option value="TH">Thailand</option>
		              <option value="TG">Togo</option>
		              <option value="TK">Tokelau</option>
		              <option value="TO">Tonga</option>
		              <option value="TT">Trinidad and Tob</option>
		              <option value="TN">Tunisia</option>
		              <option value="TR">Turkey</option>
		              <option value="TM">Turkmenistan</option>
		              <option value="TC">Turks and Caicos</option>
		              <option value="TV">Tuvalu</option>
		              <option value="AE">U.A.E.</option>
		              <option value="UM">U.S.Minor Outlyin</option>
		              <option value="UG">Uganda</option>
		              <option value="UA">Ukraine</option>
		              <option value="US">United States</option>
		              <option value="UY">Uruguay</option>
		              <option value="UZ">Uzbekistan</option>
		              <option value="VU">Vanuatu</option>
		              <option value="VA">Vatican City Stat</option>
		              <option value="VE">Venezuela</option>
		              <option value="VN">Viet Nam</option>
		              <option value="VG">Virgin Islands (B</option>
		              <option value="VI">Virgin Islands, U</option>
		              <option value="WF">Wallis and Futuna</option>
		              <option value="EH">Western Sahara</option>
		              <option value="YE">Yemen, Republic o</option>
		              <option value="ZR">Zaire</option>
		              <option value="ZM">Zambia</option>
		              <option value="ZW">Zimbabwe</option>
				              </SELECT></font></td>

	          </tr>
	     <tr align="left" valign="top">
	            <td width="216" align="right" height="12"><b><font color="#000080">Name(optional)</font></td><td><input type="text" name="keywords"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="Search" name="search"></td></tr>

</form>
	    </table>
	     <p>&nbsp;</p>
	     <p>&nbsp;</p>
	     <p>&nbsp;</p>
	     <p>&nbsp;</p>

	   </tr>
	 </table>

  </center>
</div>


    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>