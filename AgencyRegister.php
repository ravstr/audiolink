<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Adoption</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">

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
  <tr>
    <td  CLASS="maincolor"  width="181">
    &nbsp;</td>
    <td width="698"><img BORDER="0" SRC="images/spacer.gif" width="1" height="1"><p align="center">
    <span style="font-size: 56pt">Our Banner</span></p>
    <p align="center">&nbsp;</td>
    <td  CLASS="maincolor" width="123">
    <p class="sidebar" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td  CLASS="maincolor" width="181" valign="top">
    &nbsp;</td>

    <td  CLASS="maincolor" width="698" style="background-color: #FFFFFF">
    <p align="center">| Bookmark us |&nbsp; Link to Us | Recommend our site | </td>
   <td  CLASS="maincolor" width="123">
    &nbsp;</td>

  </tr>
  <tr>
    <td  CLASS="maincolor" width="181" valign="top">
    &nbsp;<p align="center">Home<br>
    About Us<br>
    Register<br>
    Login<br>
    Testimonials<br>
    INS Tips<br>
    News<br>
    F.A.Q<br>
    HomeStudy<br>
    Logout<br>
    Contact Us<br>
    <br>
    <br>
&nbsp;</td>
<td  CLASS="maincolor" width="698" style="background-color: #FFFFFF">
    &nbsp;<p>&nbsp;</p>

<?

include 'db.php';

// Define post fields into simple variables
$AgencyFname = $_POST['AgencyFname'];
$AgencyLname = $_POST['AgencyLname'];
$AgencyEmail = $_POST['AgencyEmail'];
$AgencyUsername = $_POST['AgencyUsername'];
$AgencyPassword = $_POST['AgencyPassword'];
$AgencySecretQuestion = $_POST['AgencySecretQuestion'];
$AgencySecretAnswer = $_POST['AgencySecretAnswer'];
$Agencyaddress1 = $_POST['Agencyaddress1'];
$Agencyaddress2 = $_POST['Agencyaddress2'];
$Agencycity= $_POST['Agencycity'];
$AgencyState = $_POST['AgencyState'];
$AgencyZip = $_POST['AgencyZip'];
$AgencyHomecountry = $_POST['AgencyHomecountry'];
$AgencyPhone = $_POST['AgencyPhone'];
$Agencycurrentposition = $_POST['Agencycurrentposition'];
$AgencyName = $_POST['AgencyName'];
$AgencyWebSite = $_POST['AgencyWebSite'];
$AgencyYearNum = $_POST['AgencyYearNum'];
$AgencyEmpNum = $_POST['AgencyEmpNum'];
$AgencyAssistance = $_POST['AgencyAssistance'];
$AgencyOfficeUS = $_POST['AgencyOfficeUS'];
$AgencyChildGender = $_POST['AgencyChildGender'];
$AgencyAdoptionType = $_POST['AgencyAdoptionType'];
$AgencyCountry = $_POST['AgencyCountry'];
$AgencyLicense = $_POST['AgencyLicense'];
$AgencyDescription = $_POST['AgencyDescription'];

/* Lets strip some slashes in case the user entered
any escaped characters. */

$AgencyFname = stripslashes($AgencyFname);
$AgencyLname = stripslashes($AgencyLname);
$AgencyEmail = stripslashes($AgencyEmail);
$AgencyUsername = stripslashes($AgencyUsername);
$AgencyPassword = stripslashes($AgencyPassword);
$AgencySecretQuestion = stripslashes($AgencySecretQuestion);
$AgencySecretAnswer  = stripslashes($AgencySecretAnswer);
$Agencyaddress1 = stripslashes($Agencyaddress1);
$Agencyaddress2 = stripslashes($Agencyaddress2);
$Agencycity= stripslashes($Agencycity);
$AgencyState = stripslashes($AgencyState);
$AgencyZip = stripslashes($AgencyZip);
$AgencyHomecountry = stripslashes($AgencyHomecountry);
$AgencyPhone = stripslashes($AgencyPhone);
$Agencycurrentposition = stripslashes($Agencycurrentposition);
$AgencyName = stripslashes($AgencyName);
$AgencyWebSite = stripslashes($AgencyWebSite);
$AgencyYearNum = stripslashes($AgencyYearNum);
$AgencyEmpNum = stripslashes($AgencyEmpNum);
$AgencyAssistance = stripslashes($AgencyAssistance);
$AgencyOfficeUS = stripslashes($AgencyOfficeUS);
$AgencyChildGender = stripslashes($AgencyChildGender);
$AgencyAdoptionType = stripslashes($AgencyAdoptionType);
$AgencyCountry = stripslashes($AgencyCountry);
$AgencyLicense = stripslashes($AgencyLicense);
$AgencyDescription = stripslashes($AgencyDescription);



/* Do some error checking on the form posted fields */

if((!$AgencyFname) || (!$AgencyLname) || (!$AgencyUsername) || (!$AgencyEmail)){

	echo 'You did not submit the following required information! <br />';
	if(!$AgencyFname){
		echo "First Name is a required field. Please enter it below.<br />";
	}
	if(!$AgencyLname){
		echo "Last Name is a required field. Please enter it below.<br />";
	}
	if(!$AgencyEmail){
		echo "Email Address is a required field. Please enter it below.<br />";
	}
	if(!$AgencyUsername){
		echo "Desired Username is a required field. Please enter it below.<br />";
	}
	 // Show the form again!
	/* End the error checking and if everything is ok, we'll move on to
	 creating the user account */
	  // if the error checking has failed, we'll exit the script!
}

/* Let's do some checking and ensure that the user's email address or username
 does not exist in the database */

 $sql_email_check = mysql_query("SELECT email_address FROM AgencyProfile WHERE email_address='$AgencyEmail'");
 $sql_username_check = mysql_query("SELECT username FROM AgencyProfile WHERE username='$AgencyUsername'");

 $email_check = mysql_num_rows($sql_email_check);
 $username_check = mysql_num_rows($sql_username_check);

 if(($email_check > 0) || ($username_check > 0)){

 	echo "Please fix the following errors: <br />";
 	if($email_check > 0){
 		echo "<strong>Your email address has already been registered by another member in our database. Please submit a different Email address!<br />";
 		unset($AgencyEmail);
 	}
 	if($username_check > 0){
 		echo "The username you have selected has already been registered by another member in our database. Please choose a different Username!<br />";
 		unset($AgencyUsername);
 	}

 	   // exit the script so that we do not create this account!
 }

/* Everything has passed both error checks that we have done.
It's time to create the account! */






// Enter info into the Database
$sql1 = mysql_query("INSERT INTO
		AgencyProfile (username, password, question, answer,signup_date, first_name, last_name, phone, email_address, position, agency_name, website, address1, address2, city, state, zip, country, operation_years, employee_number, adoption_assistance, us_branch, gender, adoptiontype, operation_country, licence, description)
		VALUES('$AgencyUsername', '$AgencyPassword', '$AgencySecretQuestion', '$AgencySecretQuestionAnswer', now()),'$AgencyFname', '$AgencyLname', '$AgencyPhone', '$AgencyEmail', '$Agencycurrentposition', '$AgencyName','$AgencyWebSite','$Agencyaddress1','$Agencyaddres2','$AgencyCity','$AgencyState','$AgencyZip','$AgencyCountry','$AgencyYearNum','$AgencyEmpNum','$AgencyAssistance','$AgencyOfficeUS','$AgencyChildGender','$AgencyAdoptionType','$AgencyHomeCountry','$AgencyLicence', '$AgencyDescription')") or die (mysql_error());

if(!$sql1){
	echo 'There has been an error creating your account. Please contact the webmaster.';
} else {


		// Let's mail the user!
		$subject = "Membership request at $sitename";
		$message = "Dear $first_name $last_name,
		You are now registered at our website
		To activate your membership, please login


		Username: $AgencyUsername
		Password: $AgencyPassword
		Please keep this username and password in a location that is easily accessible by you.

		Thanks!
		Webmaster, $sitename



		This is an automated response, please do not reply!";

		mail($email_address, $subject, $message, "From: $sitename <$adminemail>\nX-Mailer: PHP/" . phpversion());


	echo 'Your membership information has been mailed to your email address! Please check it and follow the directions!';

}
?>
   <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;
</td>
   <td  CLASS="maincolor" width="123">
    <p class="sidebar" align="center">&nbsp;</td>

  </tr>
  <tr>
    <td  CLASS="maincolor" width="181">
    <img BORDER="0" SRC="images/spacer.gif" width="1" height="1"></td>

    <td  CLASS="maincolor" width="698">
    &nbsp;</td>
    <td  CLASS="maincolor" width="123">
    <img BORDER="0" SRC="images/spacer.gif" width="1" height="1"></td>
  </tr>
  <tr>
    <td width="181">&nbsp;</td>
    <td width="698"><font color="#000080"><font face="Verdana, Arial, Helvetica, sans-serif" size="1">415-867-2849 |
    adopt@sfsu.edu
Copyright © 2004, Pinnacle Research, Inc.</font> </font><img BORDER="0" SRC="images/spacer.gif" width="1" height="1"></td>

    <td width="123">&nbsp;</td>
  </tr>
</table>
</body></html>