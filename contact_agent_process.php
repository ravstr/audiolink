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
	     	   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    	?>


<p>

          <div align="center">
		    <center>
		  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">
              <tr>
		  	     <td width="100%" align="center"><br><br>

		  	<?
			   	/* Check User Script */
			   	session_start();  // Start Session

			   	$gname = $_POST['group_name'];
			   	$mfname = $_POST['mfname'];
			   	$mlname = $_POST['mlname'];
			   	// = $_POST['message'];
			   	$aname = $_POST['agency_name'];

			   	include 'db.php';
			   	//include 'flag.php';
				$sql = "SELECT AgencyProfile.*, Requests.MusicianId FROM AgencyProfile INNER JOIN Requests ON AgencyProfile.userid = Requests.AgentId AND Requests.MusicianId = $_SESSION[musicianuserid] AND Requests.banned = 1 AND Requests.AgentId='$id'";


				$sql_result = mysql_query($sql,$connection) or die ('Could not select data');

				$login_check = mysql_num_rows($sql_result);
				//mysql_close($connection);
			    if($login_check > 0)
			    {
			   		echo "Sorry, you have been banned by $agency_name!";
			   	}
			   	else {
			     	$rowcount = 0;
					while($row = mysql_fetch_array($sql_result)){
							foreach( $row AS $key => $val ){
								$$key = stripslashes( $val );
							}


				$sql1 = "INSERT INTO Requests (MusicianId, AgentId) VALUES ('$musicianuserid','$id')";
				$sql_result1 = mysql_query($sql1,$connection) or die ('Could not insert data');

							$subject = "$gname has made a request";
										$message = "Dear $first_name $last_name,
$mfname $lname of $gname has requested for an audition. Following is the message: Please log on to our web site to view the profile and respond.

$message


Thanks!
Webmaster, $sitename

This is an automated response, please do not reply!";

//mail($email_address, $subject, $message, "From: $sitename <$adminemail>\nX-Mailer: PHP/" . phpversion());





			   }

echo "Your request has been sent to <b>$agency_name.</b>";
			    }

			 ?>



   				</td></tr></table>

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