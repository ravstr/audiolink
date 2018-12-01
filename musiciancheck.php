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

    <?
	/* Check User Script */
	session_start();  // Start Session

	include 'db.php';
	// Convert to simple variables
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = mysql_query("SELECT * FROM musician WHERE username='$username' AND password='$password'");
	$login_check = mysql_num_rows($sql);

	if($login_check > 0){
		while($row = mysql_fetch_array($sql)){
		foreach( $row AS $key => $val ){
			$$key = stripslashes( $val );
		}

			session_register('mfirst_name');
			$_SESSION['mfirst_name'] = $first_name;
			session_register('mlast_name');
			$_SESSION['mlast_name'] = $last_name;
			session_register('memail_address');
			$_SESSION['memail_address'] = $email_address;
			session_register('musicianuserid');
			$_SESSION['musicianuserid'] = $userid;
		    session_register('mgroup');
			$_SESSION['mgroup'] = $group_name;

			echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";

	$sql1 = "SELECT * FROM Requests WHERE Musicianid='$musicianuserid'";

    $result = mysql_query($sql1) or die(mysql_error());

    $row_num = mysql_num_rows($result);

    if($row_num == 0) {
		$row_num = 1;
	}

    $rate = $rating/$row_num;

    echo "<p><center>Your average rating is: <b>$rate</b></center>";



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







	<?PHP

		}


	} else {
		echo "<br><center>You could not be logged in! Either the username and password do not match!</center>";
?>


  <form name="form1" method="post" action="musiciancheck.php">
  		   	 <table align="center" border="1" bordercolor="#666699"  CELLPADDING="2" CELLSPACING="0" width="353" height="172">
  		   	     		   	<tr>
  		   	     		   		<td class="headwhite12" align="center" valign="TOP" bgcolor="#666699" height="30" width="345">
  		   	     				   <p align="center">
  		   	     				   <font face="Times New Roman, Times, serif" size="4" color="#FFFFFF"><strong>
  		   	     				   Members Login</strong></font>
  		   	     		       </td>
  		   	     		   	</tr>
  		   	     		   	<tr>
  		   	     				<td align="center" height="127" width="345">
  		   	     					<table BORDER="0" BORDERCOLOR="black" CELLPADDING="0" CELLSPACING="0">
  		   	     						<tr><td>&nbsp;</td></tr>
  		   	     						<tr><td align="center">
  		   	     							<table BORDER="0" BORDERCOLOR="purple" CELLPADDING="0" CELLSPACING="0" width="270" >
  		   	     								<tr valign="TOP">
  		   	     									<td valign="middle" align="RIGHT" nowrap width="84">
  		   	                                        <b><font color="#000080" size="1">Username</font></b></td>
  		   	     									<td nowrap width="169">
  		   	     								    	<input name="username" value="" size="21" maxlength="50"></td>
  		   	     								</tr>



  		   	     								<tr>
  		   	     									<td valign="middle" align="RIGHT" nowrap width="84"><b>
  		   	     								  		 <font size="1" color="#000080">Password:&nbsp;</font></b>
  		   	     								  	</td>
  		   	     									<td nowrap width="169">
  		   	     								  	 	<input name="password" type="password" value="" size="21" maxlength="16">
  		   	     								  	</td>
  		   	     								</tr>

  		   	     								<tr>
  		   	     									<td colspan="2" valign="middle" align="center" height="25" nowrap width="253">
  		   	     										<input type="submit" name="Submit" value="Login">
  		   	     									</td>
  		   	     								</tr>
  		   	     								<tr>
  		   	     									<td colspan="2" height="20" valign="bottom" class="txtsmall" width="253">
  		   	     										<p align="center">&nbsp;<a href="#" onClick="window.open('../Modules1/AdminPwordRetrieve.cfm','w1','width=450,height=300,scrollbars');">Forgot password? </a></font>&nbsp;&nbsp;&nbsp;
  		   	     									</td>
  		   	     								</tr>
  		   	     							</table>
  		   	     							</td>
  		   	     						</tr>
  		   	     					</table>
  		   	     					</td>
  		   	     				</tr>
  		   	     		   </table>



  </form>

        </td>

 <?PHP
 }

 ?>
</center></div>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>