<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta HTTP-EQUIV="Content-Language" CONTENT="en-us">
<title>Adoption</title>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<script>
<!--


function Form1_Validator(theForm)
{
  var alertsay = "";

   if (theForm.uploadNeed.value == "")
    {
      alert("Please enter number of files to upload");
      theForm.uploadNeed.focus();
      return (false);
  }

}

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
    <?PHP
    	include 'flag.php';
//    	echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
        echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are currently logged in. Please click <a href=\"logout.php\">here</a>to logout</center></font>";

	?>
	<br>
      <div align="center">
       <center>
	<form name="form1" method="post" action="uploadForm2.php"  onsubmit="return Form1_Validator(this)">
	  <p>Enter the number of files(demo, picture) you are uploading. (Max upload allowed = 9, size limit 500k)</p>
	  <p>
	    <input name="uploadNeed" type="text" id="uploadNeed" maxlength="1">
	  </p>
	  <p>
	    <input type="submit" name="Submit" value="Submit">
	  </p>
	</form>
	</center></div>
    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>