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


table {
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

    <td  valign="top" CLASS="maincolor" width="698" style="background-color: #FFFFFF">
     <?PHP
	   	  // echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are logged in. <a href=\"logout.php\">Logout</a></center></font>";
                     echo "<font size=\"2\"><center>Welcome <b>$_SESSION[mfirst_name]</b>, you are currently logged in. Please click <a href=\"logout.php\">here</a>to logout</center></font>";


    ?>
<p>
     <div align="center">
       <center>
       <table border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="750" id="AutoNumber1">
 <?
   	/* Check User Script */
   	session_start();  // Start Session

   	include 'db.php';
   	//include 'flag.php';

	$sql1 = "SELECT * FROM Ratings WHERE MusicianId='$id'";

    $result = mysql_query($sql1) or die(mysql_error());

    $row_num = mysql_num_rows($result);

	if($row_num == 0) {
		$row_num_d = 1;
	}
	else
	{
	        $row_num_d = $row_num;
	}

    //echo "<p>Your average rating is: <b>$rate</b>";


	$sql = mysql_query("SELECT * FROM musician WHERE userid='$id'");
	$login_check = mysql_num_rows($sql);
    if($login_check > 0){


     	$rowcount = 0;
		while($row = mysql_fetch_array($sql)){
				foreach( $row AS $key => $val ){
					$$key = stripslashes( $val );
				}
               $rate = $rating/$row_num_d;
   ?>

   <tr align="left" valign="top">
   		               <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>Average Rating</b></font></td>
   		               <td class='profile' width="603" height="24">
   		                 <div align="left" class="style1">
   		                   <?PHP echo "$rate. (total of $row_num people rated)";?>
   		                 </div>              </td>
            </tr>

              <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>First Name</b></font></td>
                  <td class='profile' width="603" height="24">
                    <div align="left" class="style1">
                      <?PHP echo "$first_name";?>
                    </div>                </td>
            </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" class="bodycopy" align="center" height="24">
                  <font color="#000080"><b>Last Name</b></font></td>
                  <td class='profile' width="603" height="24">
                    <div align="left" class="style1">
                      <?PHP echo "$last_name";?>
                    </div>                  </td>
                </tr>
                <tr>
                  <td class='profile' width="298" align="center" height="24" valign="top"><font color="#000080"><b>
                  Phone Number</b></font></td>
                  <td class='profile' width="603" height="24" valign="top">
                    <span class="style1">
                    <?PHP echo "$phone";?>
                    </span></td>
                </tr>
                <tr>
                  <td class='profile' width="298" align="center" height="24" valign="top"><font color="#000080"><b>Email Address</b></font></td>
                  <td class='profile' width="603" height="24" valign="top">
                    <span class="style1">
                    <?PHP echo "$email_address";?>
                    </span></td>
                </tr>
                <tr>
                  <td class='profile' width="298" align="center" height="24" valign="top"><font color="#000080"><b>
                  Web site</b></font></td>
                  <td class='profile' width="603" height="24" valign="top">
                    <span class="style1">
                  <?PHP echo "$website";?></span></td>
                </tr>
                <tr>
                  <td class='profile' width="298" align="center" height="24" valign="top"><font color="#000080"><b>
                  Group Name</b></font></td>
                  <td class='profile' width="603" height="24" valign="top">
                    <span class="style1">
                  <?PHP echo "$group_name";?></span></td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>
                  Address:</b></font></td>
                  <td class='profile' width="603" height="24"><span class="style1"></span>
                  </td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>Street Address</b></font></td>
                  <td class='profile' width="603" height="24">
                    <div align="left" class="style1">
                      <?PHP echo "$address1";?>
                    </div>                  </td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" class="bodycopy" align="center" height="24">
                  <font color="#000080"><b>Street Address 2
                  </b> </font> </td>
                  <td class='profile' width="603" height="24">
                    <div align="left" class="style1">
                      <?PHP echo "$address2";?>
                    </div>                  </td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>City</b></font></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1">
                    <?PHP echo "$city";?>
                    </span></td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>State</b></font></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1">
                     <?PHP echo "$state";?>
                    </span></td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>Zip Code</b></font></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1">
                    <?PHP echo "$zip";?>
                    </span></td>
                </tr>
                <tr align="left" valign="top">
                  <td class='profile' align="center" width="298" height="24"><font color="#000080"><b>Country</b></font></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1"> <?PHP echo "$country";?></span></td>
                </tr>



                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">BAND/GROUP Information</font></b></td>
                  <td class='profile' width="603" height="24"><span class="style1"></span>


                  </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">Number of members:</font></b></td>
                  <td class='profile' width="603" height="24">

                    <span class="style1"><?PHP echo "$members_num";?></span>
                 </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">Skill Level:</font></b></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1"><?PHP echo "$skill_level";?></span>

                  </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">Genre:</font></b></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1"><?PHP echo "$genre";?></span>

                  </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">Years active:</font></b></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1"><?PHP echo "$years_active";?></span>

                  </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">Engagement Level:</font></b></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1"><?PHP echo "$engagement_level";?></span>

                  </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><b><font color="#000080">Can perform directly from
                  score?</font></b></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1"><?PHP echo "$score_perform";?></span>

                  </td>

                </tr>

                <tr align="left" valign="top">
                  <td class='profile' width="298" align="center" height="24"><font color="#000080"><b>
                  More Information:</b></font></td>
                  <td class='profile' width="603" height="24">
                    <span class="style1">
                    <?PHP echo "$info";?>
                    </span></td>
                </tr>




<?PHP

   }

   	} else {
   		echo "<tr><td class='profile' colspan =\"5\">Sorry, no results found!</td></tr>";
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