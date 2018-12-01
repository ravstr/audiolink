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

    <td valign="top" CLASS="maincolor" width="698" style="background-color: #FFFFFF">
       <?PHP
       	echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
	?>
<p><p>
      <div align="center">
       <center>
<?
set_time_limit(-1);
$uploadNeed = $_POST['uploadNeed'];


$dirinfo = $_SESSION[mfirst_name]."_".$_SESSION[mlast_name];

 if (!is_dir("$dirinfo")){
	mkdir("$dirinfo", 0777);
  }


for($x=0;$x<$uploadNeed;$x++){
$file_name = $_FILES['uploadFile'. $x]['name'];
$file_size = $_FILES['uploadFile'. $x]['size'];


$file_name = stripslashes($file_name);
$file_name = str_replace("'","",$file_name);
$file_name = $first_name.$last_name.$file_name;

if ( $file_size > 500000) {
        echo "$file_name has file size over 500K.<br>";
 } else {
    $copy = copy($_FILES['uploadFile'. $x]['tmp_name'],"$dirinfo/$file_name");

 if($copy){
 echo "$file_name | uploaded sucessfully!<br>";
 }else{
 echo "$file_name | could not be uploaded!<br>";
 }
}
} // end of for loop
?>
</center><div>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    </td>

   <?PHP

  	  	include 'bottominclude.php';

  ?>
</table>


</body></html>