<?

include 'db.php';

 $sql_email_check = mysql_query("SELECT email_address FROM AgencyProfile WHERE email_address='$AgencyEmail' AND userid <> '$_SESSION[agentuserid]'");
 $sql_username_check = mysql_query("SELECT username FROM AgencyProfile WHERE username='$AgencyUsername' AND userid <> '$_SESSION[agentuserid]'");

 $email_check = mysql_num_rows($sql_email_check);
 $username_check = mysql_num_rows($sql_username_check);

?>


<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title></title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">

<style type="text/css">
<!--

.maincolor { background: #BA9BB8}

.font1{font-family: Arial, Geneva, Helvetica, sans-serif; font-size: 12px;}

 td.profile {
 	font-family: Verdana, Arial, Helvetica, sans-serif;
 	font-size: 11px;
 	line-height: normal;
 	font-style: normal;
 	font-weight: normal;
 	color: #000000;
 	border-width: 1px;
 	border-style: solid;
 	border-color: #000000;
 	border-spacing: 10px

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


<?PHP

    if(($email_check > 0) || ($username_check > 0)){
			 echo 'Email or Username is already taken. Please go back and choose another one';

	}
	else {

$sql = "UPDATE AgencyProfile SET username = '$AgencyUsername', password = '$AgencyPassword',
	question = '$AgencySecretQuestion',
	answer = '$AgencySecretAnswer',
	first_name = '$AgencyFname',
	last_name = '$AgencyLname',
	phone = '$AgencyPhone',
	email_address = '$AgencyEmail',
	position = '$Agencycurrentposition',
	agency_name = '$AgencyName',
	website = '$AgencyWebSite',
	address1 = '$Agencyaddress1',
	address2 = '$Agencyaddress2',
	city = '$Agencycity',
	state  = '$AgencyState',
	zip = '$AgencyZip',
	country = '$AgencyHomecountry',
	operation_years = '$AgencyYearNum',
	employee_number = '$AgencyEmpNum',
	assistance = '$AgencyAssistance',
	us_branch = '$AgencyOfficeUS',
	operation_country = '$AgencyCountry',
	licence = '$AgencyLicense',
	description = '$AgencyDescription',
	genre = '$Genre',
	cardholdername = '$cardholdername',
	cardtype = '$cardtype',
	expiration = '$expiration',
	cardnum = '$cardnum',
	billingaddress1 = '$billingaddress1',
	billingaddress2 = '$billingaddress2',
	billingcity = '$billingcity',
	billingstate = '$billingstate',
	billingzip = '$billingzip',
    billingcountry = '$billingcountry' WHERE userid='$_SESSION[agentuserid]'";

	$sql_result = mysql_query($sql,$connection) or die (mysql_error());
	mysql_close($connection);
    if(!$sql_result){

		echo 'There has been an error creating your account. Please contact the webmaster.';
	} else {


     	echo 'Your membership information has been updated!';

	}
}
?>

<p><p>
    <table border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="750" height="439">
	     <tr>
		        <td width="146" align="left" height="19"><font color="#000080"><b>Username</b></font></td>
		        <td width="240" height="19" align="left">
		                <font color="#000080">
		                <?PHP echo "$AgencyUsername";?></font></td>
		        <td width="600" align="center" colspan="2" height="19">
		        <p align="left"></td>
		      </tr>
		      <tr>
		        <td width="146" align="left" height="19"><font color="#000080"><b>Password</b></font></td>
		        <td width="240" height="19" align="left">
		                <font color="#000080">
		                <?PHP echo "$AgencyPassword";?></font></td>
		        <td width="92" align="center" height="19">&nbsp;</td>
		        <td width="508" height="19">
		                &nbsp;</td>
		      </tr>
		      <tr>
		        <td width="146" align="left" height="19"><font color="#000080"><b>Secret Question</b></font></td>
		        <td width="240" height="19" align="left">
		                <font color="#000080">
		                <?PHP echo "$AgencySecretQuestion";?></font></td>
		        <td width="92" height="19"><b><font color="#000080">Secret Answer</font></b></td>
		        <td width="508" height="19" align="left">
		                <font color="#000080">
		                <?PHP echo "$AgencySecretAnswer";?></font></td>
		      </tr>
		      <tr>
		        <td width="146" align="left" height="20">&nbsp;</td>
		        <td width="240" height="20" align="left">&nbsp;</td>
		        <td width="92" height="20">&nbsp;</td>
		        <td width="508" height="20" align="left">&nbsp;</td>
		      </tr>
		      <tr align="left" valign="top">
		            <td width="157" height="19" class="profile" colspan="4"></td>

		          </tr>
		          <tr align="left" valign="top">
		            <td width="157" height="19" class="profile"><font color="#000080"><b>*First Name</b></font></td>
		            <td width="285" height="19" class="profile">
		                <font color="#000080">
		                <?PHP echo "$AgencyFname";?></font></td>
		            <td width="99" height="19" class="profile"><font color="#000080"><b>*Street Address</b></font></td>
		            <td width="477" height="19" class="profile">
		              <div align="left">
		                <font color="#000080">
		                <?PHP echo "$Agencyaddress1";?>
		                </font>


		              </div>


		            </td>
		          </tr>
		          <tr align="left" valign="top">
		            <td width="157" height="29" class="profile">
		            <font color="#000080"><b>*Last Name</b></font></td>
		            <td width="285" height="29" class="profile">
		                <font color="#000080">
		                <?PHP echo "$AgencyLname";?></font></td>
		            <td width="99" height="29" class="profile">
		            <font color="#000080"><b>Street Address 2
		            </b> </font> </td>
		            <td width="477" height="29" class="profile">
		              <div align="left">
		                <font color="#000080">
		                <?PHP echo "$Agencyaddress2";?>
		                </font>
		              </div>
		            </td>
		          </tr>
		          <tr>
		            <td width="157" height="19" valign="top" class="profile" align="left"><font color="#000080"><b>
		            *Phone Number</b></font></td>
		            <td width="285" height="19" valign="top" class="profile" align="left">
		              <font color="#000080">
		              <?PHP echo "$AgencyPhone";?></font></td>
		            <td width="99" height="19" class="profile"><font color="#000080"><b>*City</b></font></td>
		            <td width="477" height="19" class="profile" align="left">
		              <font color="#000080">
		              <?PHP echo "$Agencycity";?></font>
		            </td>
		          </tr>
		          <tr>
		            <td width="157" height="29" valign="top" class="profile" align="left"><font color="#000080"><b>*Email Address</b></font></td>
		            <td width="285" height="29" valign="top" class="profile" align="left">
		              <font color="#000080">
		              <?PHP echo "$AgencyEmail";?></font>
		            </td>
		            <td width="99" height="29" class="profile"><font color="#000080"><b>State</b></font></td>
		            <td width="477" height="29" class="profile" align="left">
		              <font color="#000080"><?PHP echo "$AgencyState";?></font>
		            </td>
		          </tr>
		          <tr>
		            <td width="157" height="19" valign="top" class="profile" align="left"><font color="#000080"><b>
		            *Current Position</b></font></td>
		            <td width="285" height="19" valign="top" class="profile" align="left">
		            <font color="#000080">
		            <?PHP echo "$Agencycurrentposition";?></font></td>
		            <td width="99" height="19" class="profile"><font color="#000080"><b>Zip Code</b></font></td>
		            <td width="477" height="19" class="profile" align="left">
		              <font color="#000080">
		              <?PHP echo "$AgencyZip";?></font>
		            </td>
		          </tr>
		          <tr>
		            <td width="157" height="29" valign="top" class="profile" align="left">
		            <font color="#000080"><b>*Agency Name</b></font></td>
		            <td width="285" height="29" valign="top" class="profile" align="left">
		            <font color="#000080">
		            <?PHP echo "$AgencyName";?></font></td>
		            <td width="99" height="29" class="profile"><font color="#000080"><b>
		            *Country</b></font></td>
		            <td width="477" height="29" class="profile" align="left">
		              <font color="#000080"><?PHP echo "$AgencyHomecountry";?></font></td>
		          </tr>
		            <tr>
		            <td width="157" align="left" height="19" class="profile">
		            <b><font color="#000080">Web site</font></b></td>
		            <td colspan="3" width="285" height="19" class="profile" align="left">
		            <font color="#000080">
		            <?PHP echo "$AgencyWebSite";?></font></td>

		            </tr>
		            <tr>
		            <td width="157" colspan="4" align="left" height="19" class="profile">&nbsp;</td>

		            </tr>
		          <tr align="left" valign="top">
		            <td width="157" colspan="4" height="19" class="profile">
		            <font color="#000080"><b>Additional Info</b></font></td>

		          </tr>
		          <tr align="left" valign="top">
		            <td width="452" align="right" height="19" colspan="2" class="profile">
		            &nbsp;</td>
		            <td width="504" height="19" colspan="2" class="profile">
		                &nbsp;</td>
		          </tr>
		          <tr align="left" valign="top">
		            <td width="452" align="right" height="19" colspan="2" class="profile">
		            <font color="#000080"><b>*Number of years operated?</b></font></td>
		            <td width="504" height="19" colspan="2" class="profile">
		                <font color="#000080">
		                <?PHP echo "$AgencyYearNum";?></font></td>
		          </tr>
		          <tr>
		            <td width="442" align="right" height="38" colspan="2" class="profile">
		            <font color="#000080"><b>&nbsp;&nbsp;&nbsp;&nbsp; *Number of full
		            time employees in your agency?</b></font></td>
		            <td width="504" height="38" colspan="2" class="profile">
		                <font color="#000080">
		                <?PHP echo "$AgencyEmpNum";?></font></td>
		            </tr>
		          <tr align="left" valign="top">
		            <td width="452" align="right" height="19" colspan="2" class="profile">
		            <font color="#000080"><b>*Do you provide any other assistance?</b></font></td>
		            <td width="504" height="19" colspan="2" class="profile">
		                <font color="#000080"><?PHP echo "$AgencyAssistance";?></font></td>
		          </tr>
		          <tr align="left" valign="top">
		            <td width="452" align="right" height="19" colspan="2" class="profile">
		            <font color="#000080"><b>*Do you have an office in US?</b></font></td>
		            <td width="504" height="19" colspan="2" class="profile">
		                <font color="#000080"><?PHP echo "$AgencyOfficeUS";?> </font></td>
		          </tr>
		          <tr align="left" valign="top">
		            <td width="442" align="right" height="19" colspan="2" class="profile">
		            <font color="#000080"><b>*Country of operation:</b></font></td>
		            <td width="504" height="19" colspan="2" class="profile">
		              <font color="#000080"><?PHP echo "$AgencyCountry";?>
		               </font></td>
		          </tr>
		          <tr>
		            <td width="442" align="right" height="19" colspan="2" class="profile">
		            <font color="#000080"><b>*Do you have a license to operate?</b></font></td>
		            <td width="504" height="19" colspan="2" class="profile">
		                <font color="#000080"><?PHP echo "$AgencyLicense";?>
		             </font></td>
		            </tr>

					<tr>
							            <td width="442" align="right" height="19" colspan="2" class="profile">
							            <font color="#000080"><b>Genre:</b></font></td>
							            <td width="504" height="19" colspan="2" class="profile">
							                <font color="#000080"><?PHP echo "$Genre";?>
							             </font></td>
		            </tr>

		          <tr>
		            <td colspan="4" width="157" align="right" height="25" class="profile"></td>

		          </tr>

		          <tr align="left" valign="top">
		            <td width="892" height="65" colspan="4" class="profile">
		            <font color="#000080"><b>Description of your agency</b>:</font><p>
		              <font color="#000080">
		              <?PHP echo "$AgencyDescription";?></font></td>
		          </tr>

	        </table>







    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>