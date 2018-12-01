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
		  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">


		  	<?
			   	/* Check User Script */
			   	session_start();  // Start Session

			   	include 'db.php';
			   	//include 'flag.php';



				$sql = mysql_query("SELECT * FROM Ratings WHERE Ratings.MusicianId='$id' AND MusicianId='$_SESSION[musicianuserid]'");
				$login_check = mysql_num_rows($sql);
			    if($login_check > 0){
					echo "<tr><td colspan =\"5\">Sorry, you have already rated $gname!</td></tr>";

				} else {
                ?>

                <tr>
						  	     <td width="100%" align="center"><br><br>
									<form method="POST" action="mmusician_rating_process.php">
									<input type="hidden" name="id" value="<?PHP echo "$id"; ?>">
									<input type="hidden" name="gname" value="<?PHP echo "$gname"; ?>">

									<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" align="left" height="155">

									<tr><td align="center" height="19" colspan="2" width="550">You are rating <b><?PHP echo "$gname"; ?></b>. An email message will be
										automatically sent to <b><?PHP echo "$gname"; ?></b> once you are finished with rating <b><?PHP echo "$gname"; ?></b>.</td></tr>


									  <tr>
										<td align="center"  width="141">
										<p align="left">Group Name:</td>
										<td align="left" height="19" width="410"><b><?PHP echo "$gname"; ?></b></td></tr>

									  <tr>
										<td align="center" width="141">
										<p align="left">Rating (1<2<3<4<5):</td>
										<td align="center" height="19" width="410">
										<p align="left">
										<select size="1" name="Rating">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										</select>
									  </td></tr>

									  <tr>
										<td align="center" height="19" width="251">
										<input type="submit" name="submit" value="Rate" style="float: right"></td>
										<td align="center" height="19" width="299">
										&nbsp;</td></tr>

									  </table>








						  	   </form>
               </td></tr>



             <?PHP

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