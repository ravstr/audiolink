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
   	     <form method="POST" action="agent_post_process.php">

   	 <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" align="left" height="155">

   	    <tr><td align="center" height="19" colspan="2" width="550">Please fill
             in the information below to post an audition online. Audio Link
             members will be able to view it online after it has been posted.&nbsp;
             <br>
   &nbsp;</td></tr>


           <tr><td align="center" height="19" width="1">Date:</td>
             <td align="center" height="19" width="550">
             <input name="date" size="20" style="float: left" value="<?PHP echo date("m/d/Y"); ?>"></td></tr>

           <tr><td align="center" height="19" width="1">Place:</td>
             <td align="center" height="19" width="550">
             <input name="place" size="20" style="float: left"></td></tr>

           <tr><td align="center" height="19" width="1">Contact:</td>
             <td align="center" height="19" width="550">
             <input name="contact" size="20" style="float: left"></td></tr>

           <tr><td align="center" height="19" width="1">Email:</td>
             <td align="center" height="19" width="550">
             <input name="email" size="20" style="float: left"></td></tr>

           <tr><td align="center" height="19" width="1"></td>
             <td align="center" height="19" width="550">
             &nbsp;</td></tr>

           <tr><td align="center" height="19" width="1"></td>
             <td align="center" height="19" width="550">In the box below, please describe your audition in detail.  Include the date, location, times, and exactly the type of musicians you are looking for.
             <p align="left"><textarea rows="7" cols="52" name="message"></textarea></td></tr>

           <tr><td align="center" height="19" width="149">&nbsp;</td>
             <td align="center" height="19" width="401">&nbsp;</td></tr>

           <tr><td align="center" height="19" colspan="2" width="550">
             <input type="submit" name="submit" value="Submit"></td></tr>

           <tr><td align="center" height="37" colspan="2" width="550">&nbsp;</td></tr>

   	    </table>

   	   </form>
   	   </td></table>
     </center>
   </div>


    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>