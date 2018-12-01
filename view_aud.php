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
		  	   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    	?>
    <?
	/* Check User Script */
	session_start();  // Start Session

	include 'db.php';
	//include 'flag.php';
    $gname=$_SESSION['mgroup'];

		$sql1 = "SELECT type FROM musician WHERE userid='$musicianuserid'";

	    $result = mysql_query($sql1) or die(mysql_error());

	    $row = mysql_fetch_row($result);

	    $type=$row[0];


				if($type == 0) {
				 	echo "<br><br>You can only view the list. Please upgrade your membership to view the full profile and request an audition.";
			 }

    $sql = mysql_query("SELECT * FROM Audition");

	$login_check = mysql_num_rows($sql);

	if($login_check > 0){
	?>

<p>
<div align="center">
  <center>
	<table>
	<tr bgcolor="#006699">
		             <td><strong><font color="#FFFFFF">Place</font></strong></td>
		             <td><strong><font color="#FFFFFF">Date</font></strong></td>
		 	    	 <td><strong><font color="#ffffff">View</strong></font></td>

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
			 if($type == 1) {
			 	echo "<Td><A href=\"demo_view.php?id=$mid\">$place</a></td>";
			 }
			 	else {
			 	echo "<Td>$place</td>";
			 }




			  if($type == 1) {
			  	echo "<Td>$date</td>";
			  }
			    else {
			    echo "<Td>------</td>";
			  }

			  if($type == 1) {
			  	echo "<Td><A href=\"demo_view.php?id=$mid\">View</a></td></tr>";
			  }
			  	else {
			  		echo "<Td>For Paid Customers Only</td></tr>";
			  }

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