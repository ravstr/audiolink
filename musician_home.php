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

   <div align="center">
     <center>
     <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber1">
       <tr>
         <td width="50%">
         <p align="center"><a href="msearch.php">
         <img border="0" src="images/msearch.gif" width="147" height="132"></a></td>
         <td width="50%">
         <p align="center"><a href="musician_update.php">
         <img border="0" src="images/mupdate.gif" width="145" height="133"></a></td>
       </tr>
       <tr>
         <td width="50%">&nbsp;</td>
         <td width="50%">&nbsp;</td>
       </tr>
       <tr>
         <td width="50%">
         <p align="center"><a href="upload.php">
         <img border="0" src="images/mdemo.gif" width="147" height="132"></a></td>
         <td width="50%">
         <p align="center"><a href="view_aud.php">
         <img border="0" src="images/mviewaud.gif" width="147" height="132"></a></td>
       </tr>
       <tr>
         <td width="50%">&nbsp;</td>
         <td width="50%">&nbsp;</td>
       </tr>
       <tr>
         <td width="50%">&nbsp;</td>
         <td width="50%">&nbsp;</td>
       </tr>
     </table>
     </center>
</div>


    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>