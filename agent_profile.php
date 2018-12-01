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

td.profile {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: normal;
	font-style: normal;
	font-weight: normal;
	color: #000000;
	border-width: 1px;
	border-style: solid;
	border-color: #000000;
	border-spacing: 10px

}
.style1 {color: #000000}


table.profile {
  background-color:#FFF;
  width:100%;
  border-collapse:collapse;
  padding: 2px 4px 2px 4px;
  border: 1px solid #660000;

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

    <td  valign="top" width="698" style="background-color: #FFFFFF">
     <?PHP
	   	//   echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
    	   	     echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are currently logged in. Please click <a href=\"logout.php\">here</a>to logout</center></font>";

    ?>

     <div align="center">
       <center>
       <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="560" id="AutoNumber1">
 <?
   	/* Check User Script */
   	session_start();  // Start Session

   	include 'db.php';
   	//include 'flag.php';

	$sql = mysql_query("SELECT * FROM AgencyProfile WHERE userid='$id'");
	$login_check = mysql_num_rows($sql);
    if($login_check > 0){


     	$rowcount = 0;
		while($row = mysql_fetch_array($sql)){
				foreach( $row AS $key => $val ){
					$$key = stripslashes( $val );
				}

   ?>

              <tr>
		      <td style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
		      <p align="center">
		                <font face="Geneva, Arial, Helvetica, san-serif">Agency Contact Info:</font></p>

		    
		     <table class="profile" border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="750" id="AutoNumber1">
		            
		            <tr align="left" valign="top">
		              <td width="137" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000"></td>
		              <td width="197" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000">
		                </td>
		              <td width="316" height="8" style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; line-height: normal; font-style: normal; font-weight: normal; color: #000000" colspan="2">
		                </td>
		            </tr>
		            <tr align="left" valign="top">
		              <td width="137" height="8" class='profile'><font color="#000080"><b>
		              First Name</b></font></td>
		              <td width="197" height="8" class='profile'>
		                  <font color="#000080">
		                  <?PHP echo "$first_name";?></font></td>
		              <td width="153" align="right" height="19" class='profile'><font color="#000080"><b>
		              Street Address</b></font></td>
		              <td width="235" height="19" class='profile'>
		                <div align="left">
		                  <font color="#000080"><?PHP echo "$address1";?>
		                  </font>


		                </div>


		              </td>
		            </tr>
		            <tr align="left" valign="top">
		              <td width="137" class="profile" height="7">
		              <font color="#000080"><b>Last Name</b></font></td>
		              <td width="197" height="7" class='profile'>
		                  <font color="#000080">
		                  <?PHP echo "$last_name";?></font></td>
		              <td width="153" class="profile" align="right" height="29">
		              <font color="#000080"><b>Street Address 2
		              </b> </font> </td>
		              <td width="235" height="29" class='profile'>
		                <div align="left">
		                  <font color="#000080"><?PHP echo "$address2";?>
		                  </font>
		                </div>
		              </td>
		            </tr>
		            <tr>
		              <td width="137" height="7" valign="top" class='profile'><font color="#000080"><b>
		              Phone Number</b></font></td>
		              <td width="197" height="7" valign="top" class='profile'>
		                <font color="#000080"><?PHP echo "$phone";?></font></td>
		              <td width="153" align="right" height="19" class='profile'><font color="#000080"><b>
		              City</b></font></td>
		              <td width="235" height="19" class='profile'>
		                <font color="#000080">
		                <?PHP echo "$city";?> </font>
		              </td>
		            </tr>
		            <tr>
		              <td width="137" height="6" valign="top" class='profile'><font color="#000080"><b>
		              Email Address</b></font></td>
		              <td width="197" height="6" valign="top" class='profile'>
		                <font color="#000080">
		                <?PHP echo "$email_address";?></font>
		              </td>
		              <td width="153" align="right" height="29" class='profile'><font color="#000080"><b>State</b></font></td>
		              <td width="235" height="29" class='profile'>
		                <font color="#000080"><?PHP echo "$state";?>
		                </font>
		              </td>
		            </tr>
		            <tr>
		              <td width="137" height="1" valign="top" class='profile'><font color="#000080"><b>
		              Current Position</b></font></td>
		              <td width="197" height="1" valign="top" class='profile'>
		              <font color="#000080"><?PHP echo "$position";?></font></td>
		              <td width="153" align="right" height="19" class='profile'><font color="#000080"><b>Zip Code</b></font></td>
		              <td width="235" height="19" class='profile'>
		                <font color="#000080">
		                <?PHP echo "$zip";?></font>
		              </td>
		            </tr>
		            <tr>
		              <td width="137" height="1" valign="top" class='profile'>
		              <font color="#000080"><b>Organization Name</b></font></td>
		              <td width="197" height="1" valign="top" class='profile'>
		              <font color="#000080"><?PHP echo "$agency_name";?></font></td>
		              <td align="right" width="153" height="29" class='profile'><font color="#000080"><b>
		              Country</b></font></td>
		              <td width="235" height="29" class='profile'>
		                <font color="#000080"><?PHP echo "$country";?></font></td>
		            </tr>
		              <tr>
		              <td width="137" height="19" class='profile'>
		              <b><font color="#000080">Web site</font></b></td>
		              <td colspan="3" width="197" height="19" class='profile'>
		              <font color="#000080"><?PHP echo "$website";?></font></td>
		               
		              </tr>
		              <tr>
		              <td width="137" height="19">&nbsp;</td>
		              <td width="197" height="19">
		                &nbsp;</td>
		              <td width="63" height="19">
		                &nbsp;</td>
		              <td width="253" height="19">
		                &nbsp;</td>
		              </tr>
		            <tr align="left" valign="top">
		              <td width="137" height="19" class='profile'>
		              <font color="#000080"><b>Additional Info</b></font></td>
		              <td colspan="3" width="197" height="19" class='profile'>
		                &nbsp;</td>
		          
		            </tr>
		            <tr align="left" valign="top">
		              <td width="344" height="9" colspan="2" class='profile'>
		              <font color="#000080"><b>Number of years operated?</b></font></td>
		              <td width="316" height="9" colspan="2" class='profile'>
		                  <font color="#000080"><?PHP echo "$operation_years";?></font></td>
		            </tr>
		            <tr>
		              <td width="334" height="19" colspan="2" class='profile'>
		              <font color="#000080"><b>Number of full
		              time employees in your agency?</b></font></td>
		              <td width="316" height="19" colspan="2" class='profile'>
		                  <font color="#000080"><?PHP echo "$employee_number";?></font></td>
		              </tr>
		            <tr align="left" valign="top">
		              <td width="344" height="19" colspan="2" class='profile'>
		              <font color="#000080"><b>Do you provide any other assistance?</b></font></td>
		              <td width="316" height="19" colspan="2" class='profile'>
		                  <font color="#000080"><?PHP echo "$assistance";?></font></td>
		            </tr>
		            <tr align="left" valign="top">
		              <td width="344" height="19" colspan="2" class='profile'>
		              <font color="#000080"><b>Do you have an office in US?</b></font></td>
		              <td width="316" height="19" colspan="2" class='profile'>
		                  <font color="#000080"><?PHP echo "$us_branch";?></font></td>
		            </tr>
		            <tr>
		              <td width="334" height="19" colspan="2" class='profile'>
		              <font color="#000080"><b>Do you have a license to operate?</b></font></td>
		              <td width="316" height="19" colspan="2" class='profile'>
		                  <font color="#000080"><?PHP echo "$licence";?></font></td>
		              </tr>

		            <tr>
		              <td width="137" height="25"></td>
		              <td width="197" height="25" align="center">
		              </td>
		              <td width="63" height="25">
		              &nbsp;</td>
		              <td width="253" height="25">
		              &nbsp;</td>
		            </tr>

		            <tr align="left" valign="top">
		              <td width="650" height="65" colspan="4" class='profile'>
		              <font color="#000080"><b>Company Profile/Description of your agency</b>:</font><p>
		                <font color="#000080">
		                <?PHP echo "$description";?></font></td>
		            </tr>
		            <tr align="left" valign="top">
		              <td width="137" height="57">
		              </td>
		              <td width="197" height="57" align="center">
		                <div align="right">
		                  <p align="left">
		                  <font color="#000080">
		                  &nbsp;</font></div>
		              </td>
		              <td width="63" height="57">
		                &nbsp;</td>
		              <td width="253" height="57">
		                &nbsp;</td>
		            </tr>
         </table></td></tr>


<?PHP

   }

   	} else {
   		echo "<tr><td colspan =\"5\">Sorry, no results found!</td></tr>";
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