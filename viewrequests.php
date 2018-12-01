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
		include 'flag.php';
  	   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[afirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    ?>
      <p><div align="center">
       <center>
     <table>
    <?
	/* Check User Script */
	session_start();  // Start Session

	include 'db.php';

$sql = "SELECT musician.*, Requests.MusicianId FROM musician INNER JOIN Requests ON musician.userid = Requests.MusicianId AND Requests.AgentId = $_SESSION[agentuserid] AND Requests.banned=0 AND Requests.Status <> 'Accept'";
    //$sql = "SELECT * FROM musician, Requests WHERE Requests.MusicianId=musician.userid AND Requests.AgentId='$agentuserid' AND MusicianId NOT IN (SELECT MusicianId FROM banned where banned.MusicianId = Requests.MusicianId AND banned.AgentId='$agentuserid')";
	//$sql = mysql_query("SELECT * FROM musician, Requests WHERE Requests.MusicianId=musician.userid AND Requests.AgentId='$agentuserid' AND MusicianId NOT IN (SELECT MusicianId FROM banned where banned.MusicianId = Requests.MusicianId AND AgentId='$agentuserid'"));

	$sql_result = mysql_query($sql,$connection) or die ('Could not select data');
	//mysql_close($connection);

	$login_check = mysql_num_rows($sql_result);

	if($login_check > 0){
	?>

	<tr bgcolor="#006699">
		             <td><strong><font color="#FFFFFF">Last Name</font></strong></td>
		             <td><strong><font color="#FFFFFF">First Name</font></strong></td>
		 	    	 <td><strong><font color="#FFFFFF">Band Name</font></strong></td>
		 	    	 <td><strong><font color="#ffffff">Location</strong></font></td>
		 	    	 <td><strong><font color="#ffffff">View Profile</strong></font></td>
		 	    	 <td><strong><font color="#ffffff">Action</strong></font></td>
     </tr>
     <?PHP
     	$rowcount = 0;
		while($row = mysql_fetch_array($sql_result)){
				foreach( $row AS $key => $val ){
					$$key = stripslashes( $val );
				}
				if ($rowcount%2==0)
				{
					$bgcolor="#FFFFFF";
				}
				else
				{
					$bgcolor="#AAAAAA";
				}

			  echo "<tr bgcolor=\"$bgcolor\">";
			  echo "<Td><A href=agent_musician_profile.php?id=$userid>$last_name</a></td>";
			  echo "<Td>$first_name</td>";
			  echo "<Td>$group_name</td>";
			  echo "<Td>$country</td>";
			  echo "<Td><A href=agent_musician_profile.php?id=$userid>Click here</a></td>";
			  echo "<Td><A href=agent_contact_musician.php?id=$userid>Accept/&nbsp</a><A href=agent_deny_musician.php?id=$userid>Deny</a>/&nbsp</a><A href=agent_ban_musician.php?id=$userid>Ban!</a></td></tr>";

				$rowcount++;
		}

	} else {
		echo "<tr><td colspan =\"5\">Sorry, no requests made!</td></tr>";
 }

 ?>
</td></table></center></div>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>