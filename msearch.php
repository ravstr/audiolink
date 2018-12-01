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
    <p><p>

    <p align="center"><a href="agent_search.php"><font size="5">Search Agents</font></a></p>
	<p align="center"><a href="search_musician.php"><font size="5">Search Musicians</font></a></p>
    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>