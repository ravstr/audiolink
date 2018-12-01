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
              <tr>
		  	     <td width="100%" align="center"><br><br>

		  	<?
			   	/* Check User Script */
			   	session_start();  // Start Session

			   	$aname = $_POST['aname'];
			   	$afname = $_POST['afname'];
			   	$alname = $_POST['alname'];
			   	// = $_POST['message'];
			   	$gname = $_POST['group_name'];

			   	include 'db.php';
			   	//include 'flag.php';

				$sql = mysql_query("SELECT * FROM musician WHERE userid='$id'");
				$sql1 = "UPDATE Requests SET banned = '1' WHERE MusicianId = '$id' AND AgentId=$_SESSION[agentuserid]";
				$sql_result = mysql_query($sql1,$connection) or die ('Could not update data');

				$login_check = mysql_num_rows($sql);
				mysql_close($connection);
			    if($login_check = 1){
			     	$rowcount = 0;
					while($row = mysql_fetch_array($sql)){
							foreach( $row AS $key => $val ){
								$$key = stripslashes( $val );
							}



							$subject = "You have been banned from any requests by $aname";
										$message = "Dear $first_name $last_name,
Your request has been banned by $aname
Following is the message sent by $afname $alname on behalf of $aname :

$message


Thanks!
Webmaster, $sitename

This is an automated response, please do not reply!";

mail($email_address, $subject, $message, "From: $sitename <$adminemail>\nX-Mailer: PHP/" . phpversion());

					echo "<b>$gname</b> has been banned from making any requests with you.";



			   }

			   	} else {
			   		echo "Sorry, no results found!";
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