


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

$sql = "UPDATE musician SET	first_name = '$Fname',last_name = '$Lname',
	phone = '$Phone',
	email_address = '$Email',
	address1 = '$address1',
	address2 = '$addres2',
	city = '$city',
	state  = '$State',
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
        type =1 WHERE userid='$_SESSION[musicianuserid]'";

	$sql_result = mysql_query($sql,$connection) or die (mysql_error());
	mysql_close($connection);
    if(!$sql_result){

		echo 'There has been an error. Please contact the webmaster.';
	} else {


     	echo 'Your membership information has been upgraded! You can now enjoy our full membership priviledges.';

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
</div>

    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>