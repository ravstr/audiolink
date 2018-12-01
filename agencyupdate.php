

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title></title>

<script Language="JavaScript">
function Form1_Validator(theForm)
{
  var alertsay = "";

   if (theForm.AgencyUsername.value == "")
    {
      alert("Please type in your Username");
      theForm.AgencyUsername.focus();
      return (false);
  }

   if (theForm.AgencySecretQuestion.value == "")
    {
      alert("Please type in your Secret Question");
      theForm.AgencySecretQuestion.focus();
      return (false);
  }

   if (theForm.AgencyPassword.value == "")
    {
      alert("Please type in your Password");
      theForm.AgencyPassword.focus();
      return (false);
  }

   if (theForm.AgencySecretAnswer.value == "")
    {
      alert("Please type in your Secret Answer");
      theForm.AgencySecretAnswer.focus();
      return (false);

  }

   if (theForm.AgencyFname.value == "")
    {
      alert("Please type in your first name");
      theForm.AgencyFname.focus();
      return (false);
  }

   if (theForm.AgencyLname.value == "")
    {
      alert("Please type in your last name");
      theForm.AgencyLname.focus();
      return (false);
  }

   if (theForm.AgencyPhone.value == "")
    {
      alert("Please type in your Phone");
      theForm.AgencyPhone.focus();
      return (false);
  }

  if (theForm.AgencyEmail.value == "")
  {
    alert("Please type in  Email address");
    theForm.AgencyEmail.focus();
    return (false);
  }



  if (theForm.AgencyYearNum.value == "")
  {
    alert("Please type in number of years operated");
    theForm.AgencyYearNum.focus();
    return (false);
  }


 if (theForm.Agencycurrentposition.value == "")
  {
    alert("Please type in your current position");
    theForm.Agencycurrentposition.focus();
    return (false);
  }

   if (theForm.Agencycity.value == "")
    {
      alert("Please type in city");
      theForm.Agencycity.focus();
      return (false);
  }

   if (theForm.AgencyName.value == "")
    {
      alert("Please type in agency name");
      theForm.AgencyName.focus();
      return (false);
  }

   if (theForm.AgencyEmpNum.value == "")
    {
      alert("Please type in Employee numbers");
      theForm.AgencyEmpNum.focus();
      return (false);
  }

   if (theForm.Agencyaddress1.value == "")
    {
      alert("Please type in address");
      theForm.Agencyaddress1.focus();
      return (false);
  }


if (theForm.cardholdername.value == "")
  {
    alert("Please type in Cardholder name");
    theForm.cardholdername.focus();
    return (false);
  }

   if (theForm.cardnum.value == "")
    {
      alert("Please type in Card Number");
      theForm.cardnum.focus();
      return (false);
  }

if (theForm.expiration.value == "")
    {
      alert("Please type in Card Expiration date");
      theForm.expiration.focus();
      return (false);
  }

if (theForm.AgencyDescription.value == "")
    {
      alert("Please type in description of your agency");
      theForm.AgencyDescription.focus();
      return (false);
  }



  }
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
<td  CLASS="maincolor" width="698" style="background-color: #FFFFFF">
<?PHP
session_start();
include 'db.php';
$sql = "SELECT * FROM AgencyProfile WHERE userid='$_SESSION[agentuserid]'";
$sql_result = mysql_query($sql,$connection) or die ("Could not select data");
if(mysql_num_rows($sql_result)>0) {
while ($row = mysql_fetch_array($sql_result))
{
?>

    <FORM METHOD="POST" ACTION="agency_update_process.php" onsubmit="return Form1_Validator(this)" name="Form1">
    &nbsp;<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber2">
      <tr>
        <td width="100%">
    <p align="center"><font color="#000080"><span class="font1"><strong>(*
    indicates mandatory fields)</strong></span></font></p>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="690" id="AutoNumber3">
      <tr>
        <td width="115" align="center"><font color="#000080"><b>Username</b></font></td>
        <td width="163">
                <font color="#000080">
                <input type="text" name="AgencyUsername" maxlength="256" size="20" value="<?php printf($row['username']); ?>"></font></td>
        <td width="412" align="center" colspan="2">
        <p align="left">(at least 6 characters length)</td>
      </tr>
      <tr>
        <td width="115" align="center"><font color="#000080"><b>Password</b></font></td>
        <td width="163">
                <font color="#000080">
                <input type="password" name="AgencyPassword" maxlength="256" size="20" value="<?php printf($row['password']); ?>"></font></td>
        <td width="146" align="center"><b><font color="#000080">Re-type Password</font></b></td>
        <td width="266">
                <font color="#000080">
                <input type="password" name="AgencyPassword1" maxlength="256" size="23"></font></td>
      </tr>
      <tr>
        <td width="115" align="center"><font color="#000080"><b>Secret Question</b></font></td>
        <td width="163">
                <font color="#000080">
                <input type="text" name="AgencySecretQuestion" maxlength="256" size="20" value="<?php printf($row['question']); ?>"></font></td>
        <td width="146" align="center"><b><font color="#000080">Secret Answer</font></b></td>
        <td width="266">
                <font color="#000080">
                <input type="text" name="AgencySecretAnswer" maxlength="256" size="23" value="<?php printf($row['answer']); ?>"></font></td>
      </tr>
      <tr>
        <td width="115" align="center">&nbsp;</td>
        <td width="163">&nbsp;</td>
        <td width="146" align="center">&nbsp;</td>
        <td width="266">&nbsp;</td>
      </tr>
    </table>

    <table width="690" border="0" cellspacing="0" cellpadding="5" height="638" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
          <tbody style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
          <tr align="left" valign="top">
            <td width="126" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"></td>
            <td width="208" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font face="Geneva, Arial, Helvetica, san-serif">Agency Contact&nbsp;
              Info: </font>
            </td>
            <td width="316" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" colspan="2">
              </td>
          </tr>
          <tr align="left" valign="top">
            <td width="126" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" align="right"><font color="#000080"><b>*First Name</b></font></td>
            <td width="208" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
                <font color="#000080">
                <input type="text" name="AgencyFname" maxlength="256" size="24" value="<?php printf($row['first_name']); ?>"></font></td>
            <td width="153" align="right" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"><font color="#000080"><b>*Street Address</b></font></td>
            <td width="235" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <div align="left">
                <font color="#000080">
                <input type="text" name="Agencyaddress1" maxlength="256" size="24" value="<?php printf($row['address1']); ?>">
                </font>


              </div>


            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="126" class="bodycopy" height="7" align="right">
            <font color="#000080"><b>*Last Name</b></font></td>
            <td width="208" height="7" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
                <font color="#000080">
                <input type="text" name="AgencyLname" maxlength="256" size="24" value="<?php printf($row['last_name']); ?>"></font></td>
            <td width="153" class="bodycopy" align="right" height="29">
            <font color="#000080"><b>Street Address 2
            </b> </font> </td>
            <td width="235" height="29" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <div align="left">
                <font color="#000080">
                <input type="text" name="Agencyaddress2" maxlength="256" size="24" value="<?php printf($row['address2']); ?>">
                </font>
              </div>
            </td>
          </tr>
          <tr>
            <td width="126" height="7" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" align="right"><font color="#000080"><b>
            *Phone Number</b></font></td>
            <td width="208" height="7" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">
              <input type="text" name="AgencyPhone" maxlength="256" size="24" value="<?php printf($row['phone']); ?>"></font></td>
            <td width="153" align="right" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"><font color="#000080"><b>*City</b></font></td>
            <td width="235" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">
              <input type="text" name="Agencycity" maxlength="256" size="24" value="<?php printf($row['city']); ?>"> </font>
            </td>
          </tr>
          <tr>
            <td width="126" height="6" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" align="right"><font color="#000080"><b>*Email Address</b></font></td>
            <td width="208" height="6" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">
              <input type="text" name="AgencyEmail" maxlength="256" size="24" value="<?php printf($row['email_address']); ?>"> </font>
            </td>
            <td width="153" align="right" height="29" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"><font color="#000080"><b>State</b></font></td>
            <td width="235" height="29" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">

<?php
// initialize or capture variable
$state = !isset($row['state'])? NULL : $row['state'];
?>
              <SELECT NAME="AgencyState">
							<option value="<?php echo $state ;?>" SELECTED><?php echo $state;?></option>

			  		                <option value="AL">Alabama </option>
			  		                <option value="AK">Alaska </option>
			  		                <option value="AZ">Arizona</option>
			  		                <option value="AR">Arkansas</option>
			  		                <option value="CA">California</option>
			  		                <option value="CO">Colorado</option>
			  		                <option value="CT">Connecticut</option>
			  		                <option value="DC">District Columbia</option>
			  		                <option value="DE">Delaware</option>
			  		                <option value="FL">Florida</option>
			  		                <option value="GA">Georgia</option>
			  		                <option value="HI">Hawaii</option>
			  		                <option value="ID">Idaho</option>
			  		                <option value="IL">Illinois</option>
			  		                <option value="IN">Indiana</option>
			  		                <option value="IA">Iowa</option>
			  		                <option value="KS">Kansas</option>
			  		                <option value="KY">Kentucky</option>
			  		                <option value="LA">Louisiana</option>
			  		                <option value="MA">Massachusetts</option>
			  		                <option value="MB">Manitoba</option>
			  		                <option value="MD">Maryland</option>
			  		                <option value="ME">Maine</option>
			  		                <option value="MI">Michigan</option>
			  		                <option value="MN">Minnesota</option>
			  		                <option value="MO">Missouri</option>
			  		                <option value="MS">Mississippi</option>
			  		                <option value="MT">Montana</option>
			  		                <option value="NC">North Carolina</option>
			  		                <option value="ND">North Dakota</option>
			  		                <option value="NE">Nebraska</option>
			  		                <option value="NH">New Hampshire</option>
			  		                <option value="NJ">New Jersey</option>
			  		                <option value="NM">New Mexico</option>
			  		                <option value="NV">Nevada</option>
			  		                <option value="NY">New York</option>
			  		                <option value="OH">Ohio</option>
			  		                <option value="OK">Oklahoma</option>
			  		                <option value="OR">Oregon</option>
			  		                <option value="PA">Pennsylvania</option>
			  		                <option value="RI">Rhode Island</option>
			  		                <option value="SC">South Carolina</option>
			  		                <option value="TN">Tennessee</option>
			  		                <option value="TX">Texas</option>
			  		                <option value="UT">Utah</option>
			  		                <option value="VA">Virginia</option>
			  		                <option value="VT">Vermont</option>
			  		                <option value="WA">Washington</option>
			  		                <option value="WV">West Virginia</option>
			  		                <option value="WI">Wisconsin</option>
			  		                <option value="WY">Wyoming</option>
		              </SELECT> </font>
            </td>
          </tr>
          <tr>
            <td width="126" height="1" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" align="right"><font color="#000080"><b>
            *Current Position</b></font></td>
            <td width="208" height="1" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080">
            <input type="text" name="Agencycurrentposition" size="24" maxlength="65" value="<?php printf($row['position']); ?>"></font></td>
            <td width="153" align="right" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"><font color="#000080"><b>Zip Code</b></font></td>
            <td width="235" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">
              <input type="text" name="AgencyZip" maxlength="256" size="10" value="<?php printf($row['zip']); ?>"> </font>
            </td>
          </tr>
          <tr>
            <td width="126" height="1" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" align="right">
            <font color="#000080"><b>*Agency Name</b></font></td>
            <td width="208" height="1" valign="top" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080">
            <input type="text" name="AgencyName" size="24" maxlength="65" value="<?php printf($row['agency_name']); ?>"></font></td>
            <td align="right" width="153" height="29" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"><font color="#000080"><b>
            *Country</b></font></td>
            <td width="235" height="29" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">
<?php

$country = !isset($row['country'])? NULL : $row['country'];
?>
              <SELECT NAME="AgencyHomecountry">
	      <option value="<?php echo $country;?>" SELECTED><?php echo $country;?></option>

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
            <tr>
            <td width="126" align="right" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <b><font color="#000080">Web site</font></b></td>
            <td width="208" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080">
            <input type="text" name="AgencyWebSite" size="24" maxlength="65" value="<?php printf($row['website']); ?>"></font></td>
            <td width="172" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            <td width="144" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            </tr>
            <tr>
            <td width="126" align="right" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">&nbsp;</td>
            <td width="208" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            <td width="63" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            <td width="253" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            </tr>




             <tr align="left" valign="top">
			            <td width="216" align="right" height="19"><font color="#000080"><b>
			            Billing Information:</b></font></td>
			            <td width="454" height="19">
			            </td>
			          </tr>
			          <tr>
					              <td width="216" align="right" height="22">
			                      <font color="#000080"><b>*Card Holder Name</b></font></td>
					              <td width="454" height="22"><font color="#000080"><input type="text" name="cardholdername" size="30" maxlength="65" value="<?php printf($row['cardholdername']); ?>"></font></td>
			          </tr>
			          <tr align="left" valign="top">
			            <td width="216" align="right" height="22"><font color="#000080"><b>*Credit Card Type</b></font></td>
			            <td width="454" height="22">
			               <?php

							$cardtype = !isset($row['cardtype'])? NULL : $row['cardtype'];
             			 ?>
			            <font color="#000080">
			            <select name="cardtype">
			            <option value="<?php echo $cardtype;?>" SELECTED><?php echo $cardtype;?></option>
			            			<option value="0">Select One</option>
					                <option value="AMEX">American Express</option>
					                <option value="Master Card">Master Card</option>
					                <option value="Visa">Visa</option>
					                <option value="Discover">Discover</option>
					    </select> </font>
			            </td>
			          </tr>
			          <tr align="left" valign="top">
			            <td width="216" align="right" height="22"><font color="#000080"><b>*Card Expiration date</b></font></td>
			            <td width="454" height="22"><font color="#000080"><input type="text" name="expiration" size="6" maxlength="65" value="<?php printf($row['expiration']); ?>"></font></td>
			          </tr>
			          <tr align="left" valign="top">
			            <td width="216" align="right" height="22"><font color="#000080"><b>*Card Number</b></font></td>
			            <td width="454" height="22"><font color="#000080"><input type="text" name="cardnum" size="30" maxlength="16" value="<?php printf($row['cardnum']); ?>"></font></td>
			          </tr>

			          <tr>
			            <td width="216" align="right" height="12"></td>
			            <td width="454" height="12">
			            </td>
			          </tr>
			          <tr>
			            <td width="216" align="right" height="22"><font color="#000080"><b>Street Address</b></font></td>
			            <td width="454" height="22">
			              <div align="left">
			                <font color="#000080">
			                <input type="text" name="billingaddress1" maxlength="256" size="30" value="<?php printf($row['billingaddress1']); ?>">
			                </font>
			              </div>
			            </td>
			          </tr>
			          <tr>
			            <td width="216" align="right" height="22"><font color="#000080"><b>Street Address 2 </b>
			            </font> </td>
			            <td width="454" height="22">
			              <div align="left">
			                <font color="#000080">
			                <input type="text" name="billingaddress2" maxlength="256" size="30" value="<?php printf($row['billingaddress2']); ?>">
			                </font>
			              </div>
			            </td>
			          </tr>
			          <tr>
			            <td width="216" align="right" height="22"><font color="#000080"><b>City</b></font></td>
			            <td width="454" height="22">
			              <font color="#000080">
			              <input type="text" name="billingcity" maxlength="256" size="30" value="<?php printf($row['billingcity']); ?>">
			              </font>
			            </td>
			          </tr>
			          <tr>
			            <td width="216" align="right" height="22"><font color="#000080"><b>State</b></font></td>
			            <td width="454" height="22">
			            <?php

										$billingstate = !isset($row['billingstate'])? NULL : $row['billingstate'];
             			 ?>
			              <font color="#000080">
			              <SELECT NAME="billingstate">
			              <option value="<?php echo $billingstate;?>" SELECTED><?php echo $billingstate;?></option>
						  		                <option value="AL">Alabama </option>
						  		                <option value="AK">Alaska </option>
						  		                <option value="AZ">Arizona</option>
						  		                <option value="AR">Arkansas</option>
						  		                <option value="CA">California</option>
						  		                <option value="CO">Colorado</option>
						  		                <option value="CT">Connecticut</option>
						  		                <option value="DC">District Columbia</option>
						  		                <option value="DE">Delaware</option>
						  		                <option value="FL">Florida</option>
						  		                <option value="GA">Georgia</option>
						  		                <option value="HI">Hawaii</option>
						  		                <option value="ID">Idaho</option>
						  		                <option value="IL">Illinois</option>
						  		                <option value="IN">Indiana</option>
						  		                <option value="IA">Iowa</option>
						  		                <option value="KS">Kansas</option>
						  		                <option value="KY">Kentucky</option>
						  		                <option value="LA">Louisiana</option>
						  		                <option value="MA">Massachusetts</option>
						  		                <option value="MB">Manitoba</option>
						  		                <option value="MD">Maryland</option>
						  		                <option value="ME">Maine</option>
						  		                <option value="MI">Michigan</option>
						  		                <option value="MN">Minnesota</option>
						  		                <option value="MO">Missouri</option>
						  		                <option value="MS">Mississippi</option>
						  		                <option value="MT">Montana</option>
						  		                <option value="NC">North Carolina</option>
						  		                <option value="ND">North Dakota</option>
						  		                <option value="NE">Nebraska</option>
						  		                <option value="NH">New Hampshire</option>
						  		                <option value="NJ">New Jersey</option>
						  		                <option value="NM">New Mexico</option>
						  		                <option value="NV">Nevada</option>
						  		                <option value="NY">New York</option>
						  		                <option value="OH">Ohio</option>
						  		                <option value="OK">Oklahoma</option>
						  		                <option value="OR">Oregon</option>
						  		                <option value="PA">Pennsylvania</option>
						  		                <option value="RI">Rhode Island</option>
						  		                <option value="SC">South Carolina</option>
						  		                <option value="TN">Tennessee</option>
						  		                <option value="TX">Texas</option>
						  		                <option value="UT">Utah</option>
						  		                <option value="VA">Virginia</option>
						  		                <option value="VT">Vermont</option>
						  		                <option value="WA">Washington</option>
						  		                <option value="WV">West Virginia</option>
						  		                <option value="WI">Wisconsin</option>
						  		                <option value="WY">Wyoming</option>
					              </SELECT> </font>
			            </td>
			          </tr>
			          <tr>
			            <td width="216" align="right" height="22"><font color="#000080"><b>Zip Code</b></font></td>
			            <td width="454" height="22">
			              <font color="#000080">
			              <input type="text" name="billingzip" maxlength="256" size="10" value="<?php printf($row['billingzip']); ?>">
			              </font>
			            </td>
			          </tr>

			          <tr>
			            <td width="216" align="right" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
				            <font color="#000080"><b>*Country:</b></font></td>
			            <td width="454" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">

			<?php

				$billingcountry = !isset($row['billingcountry'])? NULL : $row['billingcountry'];
             ?>
				              <font color="#000080">
				              <SELECT NAME="billingcountry">
			<option value="<?php echo $billingcountry;?>" SELECTED><?php echo $billingcountry;?></option>
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
            <td width="126" align="right" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>Additional Info</b></font></td>
            <td width="208" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            <td width="63" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
            <td width="253" height="19" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              &nbsp;</td>
          </tr>
          <tr align="left" valign="top">
            <td width="344" align="right" height="9" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>*Number of years operated?</b></font></td>
            <td width="316" height="9" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
                <font color="#000080">
                <input type="text" name="AgencyYearNum" maxlength="256" size="7" value="<?php printf($row['operation_years']); ?>"></font></td>
          </tr>
          <tr>
            <td width="334" align="right" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>&nbsp;&nbsp;&nbsp;&nbsp; *Number of full
            time employees in your agency?</b></font></td>
            <td width="316" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
                <font color="#000080">
                <input type="text" name="AgencyEmpNum" maxlength="256" size="7" value="<?php printf($row['employee_number']); ?>"></font></td>
            </tr>
          <tr align="left" valign="top">
            <td width="344" align="right" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>*Do you provide any other assistance?</b></font></td>
            <td width="316" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
                <font color="#000080">
<?php
// initialize or capture variable
$assistance = !isset($row['assistance'])? NULL : $row['assistance'];
?>
            <select name="AgencyAssistance">
	      <option value="<?php printf($assistance);?>" SELECTED><?php printf($assistance);?></option>

		                <option value="Yes">Yes</option>
		                <option value="No">No</option>
		     </select></font></td>
          </tr>
          <tr align="left" valign="top">
            <td width="344" align="right" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>*Do you have an office in US?</b></font></td>
            <td width="316" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
<?php
// initialize or capture variable
$us_branch = !isset($row['us_branch'])? NULL : $row['us_branch'];
?>
                   <font color="#000080">

            <select name="AgencyOfficeUS">
	      <option value="<?php printf($us_branch);?>" SELECTED><?php printf($us_branch);?></option>

		                <option value="Yes">Yes</option>
		                <option value="No">No</option>
		     </select></font></td>
          </tr>
          <tr align="left" valign="top">
		              <td width="334" align="right" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
		              <font color="#000080"><b>*Country of operation:</b></font></td>
		              <td width="316" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
              <font color="#000080">
<?php
// initialize or capture variable
$operation_country= !isset($row['operation_country'])? NULL : $row['operation_country'];
?>
            <SELECT NAME="AgencyCountry">
	      <option value="<?php printf($operation_country);?>" SELECTED><?php printf($operation_country);?></option>

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
		              </SELECT>
		      </font></td>
          </tr>



        <tr>
		            <td width="334" align="right" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
		            <font color="#000080"><b>Genre:</b></font></td>
		           <td width="316" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
		                <font color="#000080">

<?php
// initialize or capture variable
$genre = !isset($row['genre'])? NULL : $row['genre'];
?>
            <select name="Genre">
	      <option value="<?php printf($genre);?>" SELECTED><?php printf($genre);?></option>

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

              </select></font></td>
          </tr>

          <tr>
            <td width="334" align="right" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>*Do you have a license to operate?</b></font></td>
            <td width="316" height="19" colspan="2" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
                <font color="#000080">
<?php
// initialize or capture variable
$licence = !isset($row['licence'])? NULL : $row['licence'];
?>
            <select name="AgencyLicense">
	      <option value="<?php printf($licence);?>" SELECTED><?php printf($licence);?></option>

		                <option value="Yes">Yes</option>
		                <option value="No">No</option>
		     </select></font></td>
            </tr>

          <tr>
            <td width="126" align="right" height="25" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"></td>
            <td width="208" height="25" align="center" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            </td>
            <td width="63" height="25" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            &nbsp;</td>
            <td width="253" height="25" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            &nbsp;</td>
          </tr>

          <tr align="left" valign="top">
            <td width="650" height="127" colspan="4" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
            <font color="#000080"><b>Description of your agency</b>:</font><p>
              <font color="#000080">
              <textarea name="AgencyDescription" cols="71" rows="10"><?php echo $row['description']; ?></textarea></font><p>
                <font color="#000080">
                <input type="submit" name="Update" value="Submit" style="float: left"></font></td>
          </tr>

        </table>
        <p>&nbsp;</td>
      </tr>
    </table>
    </FORM>
    </td>

    <?PHP

	}
	}

	else{

	printf("Sorry, No Record Found with that ID");


}
  	  	include 'bottominclude.php';

  ?>

</table>
</body></html>

