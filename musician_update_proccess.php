<?

include 'db.php';

 $sql_email_check = mysql_query("SELECT email_address FROM musician WHERE email_address='$email' AND userid <> '$_SESSION[musicianuserid]'");

 $email_check = mysql_num_rows($sql_email_check);

?>


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

    if(($username_check > 0)){
			 echo 'Username already taken. Please go back and choose another one';

	}
	else {

$sql = "UPDATE musician SET username = '$username', password = '$password',
	question = '$question',
	answer = '$answer',
	first_name = '$fname',
	last_name = '$lname',
	phone = '$phone',
	email_address = '$email',
	group_name = '$groupname',
	website = '$website',
	address1 = '$address1',
	address2 = '$address2',
	city = '$city',
	state  = '$state',
	zip = '$zip',
	country = '$country',
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
    age = '$age',
    skill_level = '$Skill',
    genre = '$Genre',
    years_active = '$YearsActive',
    engagement_level = '$EngLevel',
    info = '$info',
    members_num = '$Members'
    WHERE userid='$_SESSION[musicianuserid]'";

	$sql_result = mysql_query($sql,$connection) or die (mysql_error());
	mysql_close($connection);
    if(!$sql_result){

		echo 'There has been an error. Please contact the webmaster.';
	} else {


     	echo 'Your information has been updated';

	}
}
?>

<p><p>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">
    <tr>
      <td width="50%">
      <p align="center"><a href="msearch.php">
      <img border="0" src="images/msearch.gif" width="147" height="132"></a></td>
      <td width="50%">
      <p align="center"><a href="musician_update.php">
      <img border="0" src="images/mupdate.gif" width="145" height="133"></a></td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%">&nbsp;</td>
    </tr>
    <tr>
      <td width="50%">
      <p align="center"><a href="upload.php">
      <img border="0" src="images/mdemo.gif" width="147" height="132"></a></td>
      <td width="50%">
      <p align="center"><a href="view_aud.php">
      <img border="0" src="images/mviewaud.gif" width="147" height="132"></a></td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%">&nbsp;</td>
    </tr>
    <tr>
      <td width="50%">&nbsp;</td>
      <td width="50%">&nbsp;</td>
    </tr>
  </table>
  </center>

    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>