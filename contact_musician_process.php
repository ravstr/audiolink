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




          <div align="center">
		    <center>
		  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">
              <tr>
		  	     <td width="100%" align="center"><br><br>

		  	<?
			   	/* Check User Script */
			   	session_start();  // Start Session

			   	 
			   	 
				 $mfname=$_SESSION[mfirst_name];
				 $mlname=$_SESSION[mlast_name];
				 $memail=$_SESSION[memail_address];
				 $mgroup=$_SESSION[mgroup];

			   	include 'db.php';
			   	//include 'flag.php';

				$sql = mysql_query("SELECT * FROM musician WHERE userid='$id'");

				$login_check = mysql_num_rows($sql);
				mysql_close($connection);
			    if($login_check > 0){
			     	$rowcount = 0;
					while($row = mysql_fetch_array($sql)){
							foreach( $row AS $key => $val ){
								$$key = stripslashes( $val );
							}



							$subject = "$formsubject";
$message = "$formmessage
mail($email_address, $subject, $message, "From: $formemail\nX-Mailer: PHP/" . phpversion());

					echo "Your message has been mailed to <b>$group_name</b>";



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