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

    <?
	/* Check User Script */
	session_start();  // Start Session

	include 'db.php';
	//include 'flag.php';

	$sql = mysql_query("SELECT * FROM musician WHERE skill_level='$Skill' OR genre='$Genre' OR years_active='$YearsActive' OR engagement_level='$EngLevel' OR country='$billingcountry' OR group_name='$name' OR age='$age'");
	$login_check = mysql_num_rows($sql);

	if($login_check > 0){
	?>

	    <?PHP
		  	   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    	?>
<p><div align="center">
  <center>
	<table>
	<tr bgcolor="#006699">
		             <td><strong><font color="#FFFFFF">Last Name</font></strong></td>
		             <td><strong><font color="#FFFFFF">First Name</font></strong></td>
		 	    	 <td><strong><font color="#FFFFFF">Band Name</font></strong></td>
		 	    	 <td><strong><font color="#ffffff">Location</strong></font></td>
		 	    	 <td><strong><font color="#ffffff">View Profile</strong></font></td>
				 <td><strong><font color="#ffffff">Contact</strong></font></td>
 			         <td><strong><font color="#ffffff">Rate</strong></font></td>
     </tr>
     <?PHP
     	$rowcount = 0;
		while($row = mysql_fetch_array($sql)){
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
			  echo "<Td><A href=musician_profile.php?id=$userid>$last_name</a></td>";
			  echo "<Td>$first_name</td>";
			  echo "<Td>$group_name</td>";
			  echo "<Td>$country</td>";
			  echo "<Td><A href=\"musician_profile.php?id=$userid\">Click here</a></td>";
			  echo "<Td><A href=\"contact_musician.php?id=$userid\">Contact $group_name</a></td>";
			  echo "<Td><A href=\"musician_rating_musician.php?id=$userid&gname=$group_name\">Rate $group_name</a></td></tr>";


				$rowcount++;
		}

	} else {
		echo "<tr><td colspan =\"6\">Sorry, no results found!</td></tr>";
 }

 ?>
</td></table>
</center>
</div>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>