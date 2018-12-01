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

    <td valign="top"  CLASS="maincolor" width="698" style="background-color: #FFFFFF">
       <?PHP
	     	   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[afirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    	?>




          <div align="center">
		    <center>
		  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">


		  	<?
			   	/* Check User Script */
			   	session_start();  // Start Session

			   	include 'db.php';
			   	//include 'flag.php';

				$sql = mysql_query("SELECT * FROM musician WHERE userid='$id'");
				$login_check = mysql_num_rows($sql);
			    if($login_check = 1){


			     	$rowcount = 0;
					while($row = mysql_fetch_array($sql)){
							foreach( $row AS $key => $val ){
								$$key = stripslashes( $val );
							}

   			?>

		  	<tr>
		  	     <td width="100%" align="center"><br><br>
					<form method="POST" action="agent_contact_musician_process.php">
					<input type="hidden" name="id" value="<?PHP echo "$userid"; ?>">
					<input type="hidden" name="afname" value="<?PHP echo "$_SESSION[afirst_name]"; ?>">
					<input type="hidden" name="alname" value="<?PHP echo "$_SESSION[afirst_name]"; ?>">
					<input type="hidden" name="aname" value="<?PHP echo "$_SESSION[agency_name]"; ?>">
					<input type="hidden" name="group_name" value="<?PHP echo "$group_name"; ?>">

		  	 <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" align="left" height="155">

		  	    <tr><td align="center" height="19" colspan="2" width="550">You are now
		            accepting request made by <b><?PHP echo "$group_name"; ?></b>. If you would also like to meet with <b><?PHP echo "$group_name"; ?></b>,
		            please indicate the date of meeting. An email message will be
		            automatically sent to <b><?PHP echo "$group_name"; ?></b> once you accept the request.<br>
		  &nbsp;</td></tr>


		          <tr><td align="center" height="19" width="1">Date:</td>
		            <td align="center" height="19" width="550">
		            <input name="date" size="20" style="float: left" value="<?PHP echo date("d/m/Y"); ?>"></td></tr>

		          <tr><td align="center" height="19" width="1">Message:</td>
		            <td align="center" height="19" width="550">
		            <p align="left"><textarea rows="7" cols="52" name="message"></textarea></td></tr>

		          <tr><td align="center" height="19" width="149">&nbsp;</td>
		            <td align="center" height="19" width="401">&nbsp;</td></tr>

		          <tr><td align="center" height="19" colspan="2" width="550"><input type="submit" name="submit" value="Accept Request from <?PHP echo "$group_name"; ?>"></td></tr>

		          <tr><td align="center" height="37" colspan="2" width="550">&nbsp;</td></tr>

		  	    </table>

		  	   </form>


		   <?PHP
			$rowcount++;

			   }

			   	} else {
			   		echo "<tr><td colspan =\"5\">Sorry, no results found!</td></tr>";
			    }

			 ?>

			  </table>

			      </center>
			    </div>
			    <p>&nbsp;</p>
			    <p>&nbsp;</p>

    </td>
   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>