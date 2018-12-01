<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Adoption</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<script Language="JavaScript">
function Form1_Validator(theForm)
{

   var yr=document.forms[0].cardtype.selectedIndex;
	if (yr==0)
   	 {
	              alert("Please select card type.");
	              theForm.cardtype.focus();
	              return (false);
	 }

  var alertsay = "";

   if (theForm.username.value == "")
    {
      alert("Please type in your Username");
      theForm.username.focus();
      return (false);
  }

   if (theForm.question.value == "")
    {
      alert("Please type in your Secret Question");
      theForm.AgencySecretQuestion.focus();
      return (false);
  }

   if (theForm.password.value == "")
    {
      alert("Please type in your Password");
      theForm.password.focus();
      return (false);
  }

   if (theForm.answer.value == "")
    {
      alert("Please type in your Secret Answer");
      theForm.answer.focus();
      return (false);

  }

   if (theForm.fname.value == "")
    {
      alert("Please type in your first name");
      theForm.fname.focus();
      return (false);
  }

   if (theForm.lname.value == "")
    {
      alert("Please type in your last name");
      theForm.lname.focus();
      return (false);
  }

   if (theForm.phone.value == "")
    {
      alert("Please type in your Phone");
      theForm.phone.focus();
      return (false);
  }

  if (theForm.email.value == "")
  {
    alert("Please type in  Email address");
    theForm.email.focus();
    return (false);
  }


  if (theForm.address1.value == "")
    {
      alert("Please type in address");
      theForm.address1.focus();
      return (false);
  }

   if (theForm.city.value == "")
    {
      alert("Please type in city");
      theForm.city.focus();
      return (false);
  }

   if (theForm.groupname.value == "")
    {
      alert("Please type in agency name");
      theForm.groupname.focus();
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

    <td valign="top" CLASS="maincolor" width="698" style="background-color: #FFFFFF">
    <p>
 <FORM METHOD="POST" ACTION="musician_register_proccess.php" onsubmit="return Form1_Validator(this)" name="Form1">
 <table border="1" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="569" height="432">
  <tr>
    <td>
    <p align="center"><font color="#000080"><span class="font1"><strong>(* indicates mandatory fields)</strong></span></font></p>
    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
      <tr>
        <td width="25%" align="right"><b><font color="#000080">*Username</font></b></td>
        <td width="25%">
	                <font color="#000080">
	                <input type="text" name="username" maxlength="256" size="20"></font></td>
        <td width="25%" align="right">&nbsp;</td>
        <td width="25%">&nbsp;</td>
      </tr>
      <tr>
        <td width="25%" align="right"><b><font color="#000080">*Password</font></b></td>
        <td width="25%">
	                <font color="#000080">
	                <input type="password" name="password" maxlength="256" size="20"></font></td>
        <td width="25%" align="right"><b><font color="#000080">*Verify Password</font></b></td>
        <td width="25%">
	                <font color="#000080">
	                <input type="password" name="password2" maxlength="256" size="23"></font></td>
      </tr>
      <tr>
        <td width="25%" align="right"><b><font color="#000080">*Secret Question</font></b></td>
        <td width="25%">
	                <font color="#000080">
	                <input type="text" name="question" maxlength="256" size="20"></font></td>
        <td width="25%" align="right"><b><font color="#000080">*Answer</font></b></td>
        <td width="25%">
	                <font color="#000080">
	                <input type="text" name="answer" maxlength="256" size="23"></font></td>
      </tr>
    </table>
<br><p>


    <table width="690" border="0" cellspacing="0" cellpadding="5" height="981">

        <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>Select membership type</b></font></td>
            <td width="454" height="22">
              <div align="left">
                <font color="#000080">
                <input type="radio" name="paytype" value="0">Free(limited) Service<input type="radio" name="paytype" value="1" checked>Paid Service
                </font>
              </div>
            </td>
          </tr>

          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>*First Name</b></font></td>
            <td width="454" height="22">
              <div align="left">
                <font color="#000080">
                <input type="text" name="fname" maxlength="256" size="30">
                </font>
              </div>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" class="bodycopy" align="right" height="22">
            <font color="#000080"><b>*Last Name</b></font></td>
            <td width="454" height="22">
              <div align="left">
                <font color="#000080">
                <input type="text" name="lname" maxlength="256" size="30">
                </font>
              </div>
            </td>
          </tr>
          <tr>
            <td width="216" align="right" height="22"><font color="#000080"><b>
            Phone Number</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <input type="text" name="phone" maxlength="256" size="30"> </font>
            </td>
          </tr>
          <tr>
            <td width="216" align="right" height="22"><font color="#000080"><b>*Email Address</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <input type="text" name="email" maxlength="256" size="30"> </font>
            </td>
          </tr>
          <tr>
            <td width="216" align="right" height="22"><font color="#000080"><b>
            Web site</b></font></td>
            <td width="454" height="22">
            <font color="#000080">
            <input type="text" name="website" size="30" maxlength="65"></font></td>
          </tr>
          <tr>
            <td width="216" align="right" height="22"><font color="#000080"><b>
            Group Name</b></font></td>
            <td width="454" height="22">
            <font color="#000080">
            <input type="text" name="groupname" size="30" maxlength="65"></font></td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="19"><font color="#000080"><b>
            Address:</b></font></td>
            <td width="454" height="19">
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="23"><font color="#000080"><b>*Street Address</b></font></td>
            <td width="454" height="23">
              <div align="left">
                <font color="#000080">
                <input type="text" name="address1" maxlength="256" size="30">
                </font>
              </div>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" class="bodycopy" align="right" height="22">
            <font color="#000080"><b>Street Address 2
            </b> </font> </td>
            <td width="454" height="22">
              <div align="left">
                <font color="#000080">
                <input type="text" name="address2" maxlength="256" size="30">
                </font>
              </div>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>*City</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <input type="text" name="city" maxlength="256" size="30"> </font>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>State</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <SELECT NAME="state">
			  		                <option value="AL">Alabama </option>
			  		                <option value="AK">Alaska </option>
			  		                <option value="AZ">Arizona</option>
			  		                <option value="AR">Arkansas</option>
			  		                <option value="CA" selected>California</option>
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
          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>Zip Code</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <input type="text" name="zip" maxlength="256" size="10"> </font>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td align="right" width="216" height="22"><font color="#000080"><b>Country</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <SELECT NAME="country">

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
            <td width="216" align="right" height="19"><font color="#000080"><b>
            Billing Information:</b></font></td>
            <td width="454" height="19">
            </td>
          </tr>
          <tr>
		              <td width="216" align="right" height="22">
                      <font color="#000080"><b>*Card Holder Name</b></font></td>
		              <td width="454" height="22"><font color="#000080"><input type="text" name="cardholdername" size="30" maxlength="65"></font></td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>*Credit Card Type</b></font></td>
            <td width="454" height="22">
            <font color="#000080">
            <select name="cardtype">
            			<option value="0" selected>Select One</option>
		                <option value="AMEX">American Express</option>
		                <option value="Master Card">Master Card</option>
		                <option value="Visa">Visa</option>
		                <option value="Discover">Discover</option>
		    </select> </font>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>*Card Expiration date</b></font></td>
            <td width="454" height="22"><font color="#000080"><input type="text" name="expiration" size="6" maxlength="65"></font></td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="22"><font color="#000080"><b>*Card Number</b></font></td>
            <td width="454" height="22"><font color="#000080"><input type="text" name="cardnum" size="30" maxlength="16"></font></td>
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
                <input type="text" name="billingaddress1" maxlength="256" size="30">
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
                <input type="text" name="billingaddress2" maxlength="256" size="30">
                </font>
              </div>
            </td>
          </tr>
          <tr>
            <td width="216" align="right" height="22"><font color="#000080"><b>City</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <input type="text" name="billingcity" maxlength="256" size="30">
              </font>
            </td>
          </tr>
          <tr>
            <td width="216" align="right" height="22"><font color="#000080"><b>State</b></font></td>
            <td width="454" height="22">
              <font color="#000080">
              <SELECT NAME="billingstate">
			  		                <option value="AL">Alabama </option>
			  		                <option value="AK">Alaska </option>
			  		                <option value="AZ">Arizona</option>
			  		                <option value="AR">Arkansas</option>
			  		                <option value="CA" selected>California</option>
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
              <input type="text" name="billingzip" maxlength="256" size="10">
              </font>
            </td>
          </tr>

          <tr>
            <td width="216" align="right" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
	            <font color="#000080"><b>*Country:</b></font></td>
            <td width="454" height="12" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">


	              <font color="#000080">
	              <SELECT NAME="billingcountry">

	              <option value="United States" selected>United States</option>
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
            <td width="216" align="right" height="12"><b><font color="#000080">BAND/GROUP Information</font></b></td>
            <td width="454" height="12">


            </td>

          </tr>

          <tr align="left" valign="top">
            <td width="216" align="right" height="11"><b><font color="#000080">Number of members:</font></b></td>
            <td width="454" height="11">

           <select name="Members">

                <option value="2" selected>2</option>

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

                <option value="16">More than 15</option>
              </select>
           </td>

          </tr>

 	<tr align="left" valign="top">
                  <td width="298" align="center" height="24"><b><font color="#000080">Average age of members:</font></b></td>
                  <td width="603" height="24">

                 <select name="age">

                <option value="17-20" selected>17-20</option>

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
            <td width="216" align="right" height="12"><b><font color="#000080">Skill Level:</font></b></td>
            <td width="454" height="12">
              <select name="Skill">

                <option value="Just Begun" selected>Just Begun</option>

                <option value="Manage Basics" >Manage Basics</option>

                <option value="Fairly Good" >Fairly Good</option>

                <option value="Very Good" >Very Good</option>

                <option value="Virtouso" >Virtouso</option>

                <option value="N/A" >N/A</option>

              </select>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td width="216" align="right" height="12"><b><font color="#000080">Genre:</font></b></td>
            <td width="454" height="12">
              <select name="Genre">

                <option value="A Capella" selected>A Capella</option>

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

                <option value="1" selected>1</option>

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

                <option value="Amateur" selected>Amateur</option>

                <option value="Semi-pro">Semi-pro</option>

                <option value="Professional">Professional</option>

                <option value="N/A" >N/A</option>

              </select>

            </td>

          </tr>

          <tr align="left" valign="top">
            <td width="216" align="right" height="12"><b><font color="#000080">Can perform directly from
            score:</font></b></td>
            <td width="454" height="12">
            <input type="radio" value="yes" checked name="score_perform">Yes
			<input type="radio" value="no" name="score_perform">No
            </td>

          </tr>

          <tr align="left" valign="top">
            <td width="216" align="right" height="52"><font color="#000080"><b>
            Description: Experiences and Personal Information</b></font></td>
            <td width="454" height="52">
              <font color="#000080">
              <textarea name="info" cols="43" rows="9"></textarea> </font>
            </td>
          </tr>
          <tr align="left" valign="top">
            <td width="216" align="right" height="45">
            </td>
            <td width="454" height="45">
              <div align="right">
                <p align="left">
                <font color="#000080">
                <input type="submit" value="Submit" style="float: left">
                </font>
              </div>
            </td>
          </tr>
        </table>
</FORM>

    </td>
  </tr>
</table>


	        <p align="center"><br>
&nbsp;</td>


   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>