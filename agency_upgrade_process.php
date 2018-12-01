
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

session_start();
include 'db.php';

$sql = "UPDATE AgencyProfile SET
	first_name = '$AgencyFname',
	last_name = '$AgencyLname',
	phone = '$AgencyPhone',
	email_address = '$AgencyEmail',
	address1 = '$Agencyaddress1',
	address2 = '$Agencyaddres2',
	city = '$Agencycity',
	state  = '$AgencyState',
	cardholdername = '$cardholdername',
	cardtype = '$cardtype',
	expiration = '$expiration',
	cardnum = '$cardnum',
	billingaddress1 = '$billingaddress1',
	billingaddress2 = '$billingaddress2',
	billingcity = '$billingcity',
	billingstate = '$billingstate',
	billingzip = '$billingzip',
        billingcountry = '$billingcountry',
        paytype =1 WHERE userid='$_SESSION[agentuserid]'";

	$sql_result = mysql_query($sql,$connection) or die (mysql_error());
	mysql_close($connection);
    if(!$sql_result){

		echo 'There has been an error. Please contact the webmaster.';
	} else {


     	echo 'Your membership information has been upgraded! You can now enjoy our full membership priviledges.';

	}

?>

<p>
	<div align="center">
  <center>

	  <center>
	  <table width="550" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0" cellspacing="0">
		<tr>
		  <td>
	      <p align="center"><a href="agent_search_musician.php"><img src="search_musician.gif" border="0"></a></td>
		  <td>
	      <p align="center"><a href="viewrequests.php"><img src="view.gif" border="0"></a></td>
		 </tr>

		<tr>
				<td>

				&nbsp;</td>
				<td>
					       &nbsp;</td>
				</tr>



		<tr>
		<td>

		&nbsp;</td>
		<td>
			       &nbsp;</td>
		</tr>


		<tr>
		<td>

		<p align="center"><a href="agencyupdate.php"><img src="update_agent.gif" border="0"></a></td>
		<td>
			 <p align="center"><a href="agent_post.php"><img src="post.gif" border="0"></a>       </td>
		</tr>

		</table>
	  </center>

    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>